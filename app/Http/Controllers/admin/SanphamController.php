<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanphamRequest;
use App\Models\DanhmucModel;
use App\Models\HinhanhModel;
use App\Models\LoaisanphamModel;
use App\Models\SanphamModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;


class SanphamController extends Controller
{
	public function sanpham()
	{
		$data_Loaisanpham = LoaisanphamModel::all();
		$data_sanpham = SanphamModel::orderBy('id', 'desc')->paginate(10);
		$data_hinhanh = HinhanhModel::all();
		$SanphamModel = SanphamModel::with('HinhanhModel')->get();
		$data_danhmuc = DanhmucModel::all();

		foreach ($data_sanpham as $sanpham) {
			$sanpham->mo_ta = substr($sanpham->mo_ta, 0, 30);
		}

		$HinhAnh = [];

		foreach ($data_sanpham as $sanpham) {
			$hinhAnh = HinhanhModel::where('ma_san_pham', $sanpham->id)->first();
			$HinhAnh[] = $hinhAnh;
		}

		if ($data_sanpham->isEmpty()) {
			return view(
				'AdminRocker.page.SanPham.index',
				compact('data_sanpham', 'data_Loaisanpham', 'HinhAnh', 'data_hinhanh', 'data_danhmuc')
			);
		} else {
			if (!empty($HinhAnh)) {
				return view(
					'AdminRocker.page.SanPham.index',
					compact('data_sanpham', 'data_Loaisanpham', 'HinhAnh', 'data_hinhanh', 'data_danhmuc')
				);
			} else {
				return view(
					'AdminRocker.page.SanPham.index',
					compact('data_sanpham', 'data_Loaisanpham', 'HinhAnh', 'data_hinhanh', 'data_danhmuc')
				);
			}
		}

	}

	public function them_sanpham(Request $request)
	{
		$data = $request->all();
		$data['ten_san_pham_slug'] = Str::slug($data['ten_san_pham']);

		try {
			$sanpham = SanphamModel::create($data);

			// Tạo danh sách lỗi
			$errors = [];

			$t_ = $sanpham->id;

			$get_image = $request->file('hinh_anh');

			if ($get_image) {
				foreach ($get_image as $image) {
					$get_name_image = $image->getClientOriginalName();
					$images = Image::make($image->getRealPath());
					$images->resize(300, 250);

					$images->save(public_path('img/' . $get_name_image));

					$x = new HinhanhModel;
					$x->hinh_anh = $get_name_image;
					$x->ma_san_pham = $t_;

					$x->save();
				}
			}
		} catch (\Exception $e) {
			// Nếu có lỗi, thêm thông báo lỗi vào danh sách lỗi
			$errors[] = 'Có lỗi xảy ra khi thêm sản phẩm.';

			// Nếu bạn muốn log lỗi để theo dõi
			// Log::error($e->getMessage());
		}

		if (empty($errors)) {
			// Nếu không có lỗi, chuyển hướng với thông báo thành công
			toastr()->success('Sản phẩm đã được thêm thành công.');
			return redirect('admin/sanpham');
		} else {
			// Nếu có lỗi, chuyển hướng với danh sách lỗi
			return redirect('admin/sanpham')->withErrors($errors);
		}

	}

	public function xoa_sanpham($id)
	{
		// $xoa_sanpham = SanphamModel::find($id);
		// if ($xoa_sanpham == null)
		// 	return '<script type ="text/JavaScript">alert("loi roi!");</script>';
		// $xoa_sanpham->delete();
		SanphamModel::where('id', $id)->update(
			[
					'is_delete' => 1,
			]
	);
		toastr()->success('Sản phẩm đã được xoá thành công.');
		return redirect('admin/sanpham');
	}

	public function cn_sanpham_($id, Request $request)
	{
		$sanpham = SanphamModel::find($id);
		if ($sanpham == null) {
			return '<script type ="text/JavaScript">alert("loi roi, khong tim thay truong nay!");</script>';
		}

		$get_image = $request->file('hinh_anh');
		if ($get_image) {
			foreach ($get_image as $image) {
				$get_name_image = $image->getClientOriginalName();
				$images = Image::make($image->getRealPath());
				$images->resize(300, 250);

				$images->save(public_path('img/' . $get_name_image));

				$x = new HinhanhModel;
				$x->hinh_anh = $get_name_image;
				$x->ma_san_pham = $id;

				$x->save();

			}
		}

		$sanpham->ten_san_pham = $request->ten_san_pham;
		$sanpham->ten_san_pham_slug = Str::slug($sanpham->ten_san_pham);
		$sanpham->ma_loai = $request->ma_loai;
		$sanpham->gia_san_pham = $request->gia_san_pham;
		$sanpham->giam_gia_san_pham = $request->giam_gia_san_pham;
		$sanpham->so_luong = $request->so_luong;
		$sanpham->luot_xem = $request->luot_xem;
		$sanpham->dat_biet = $request->dat_biet;
		$sanpham->mo_ta = $request->mo_ta;

		$sanpham->save();
		// $data = $request->all();
    // if ($data == null)
    //   return '<script type ="text/JavaScript">alert("loi roi!");</script>';
    // $data = $request->except('_token');
    // $data['ten_san_pham_slug'] = Str::slug($data['ten_san_pham']);
    // SanphamModel::where('id', $id)->update($data);   

		toastr()->success('Sản phẩm đã được cập nhật thành công.');
		return redirect('admin/sanpham');
		
	}

	public function toggleStatus()
	{
		$id = $_GET['idsta'];
		$trangthai_sanpham = SanphamModel::find($id);
		$trangthai = $trangthai_sanpham->trang_thai;
		if ($trangthai == 1) {
			$trangthai = 0;
		} else {
			$trangthai = 1;
		}

		$trangthai_sanpham->trang_thai = $trangthai;
		$trangthai_sanpham->save();
		echo $trangthai;
	}
}