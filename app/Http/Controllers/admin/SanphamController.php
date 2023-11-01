<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanphamRequest;
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

		// foreach ($SanphamModel as $sanphams) {
		// 	foreach ($sanphams->HinhanhModel as $HinhanhModel) {
		// 		$Hinhanh[] = $HinhanhModel;
		// 	}
		// }

		foreach ($data_sanpham as $sanpham) {
			$idsanpham[] = $sanpham->id;
		}
		$hinhanh = implode($idsanpham);

		for ($i = 0; $i < strlen($hinhanh); $i++) {
			$hinhAnh = HinhanhModel::where('ma_san_pham', $hinhanh[$i])->first();
			$HinhAnh[] = $hinhAnh;
		}
		// dd($HinhAnh);

		return view('AdminRocker.page.SanPham.index', compact('data_sanpham', 'data_Loaisanpham', 'HinhAnh', 'data_hinhanh'));


	}

	public function them_sanpham(SanphamRequest $request)
	{
		$data = $request->all();
		$data['ten_san_pham_slug'] = Str::slug($data['ten_san_pham']);
		SanphamModel::create($data);

		$t_ = SanphamModel::where('id', '>', '0')->max('id');

		$get_image = $request->file('hinh_anh');

		if ($get_image) {
			foreach ($get_image as $image) {
				$get_name_image = $image->getClientOriginalName();
				$images = Image::make($image->getRealPath());
				$images->resize(300, 250);

				$images->save(public_path('img/' . $get_name_image));

				// $get_name_image = $image->getClientOriginalName();
				// $image->move("img/", $get_name_image);
				$x = new HinhanhModel;
				$x->hinh_anh = $get_name_image;
				$x->ma_san_pham = $t_;

				$x->save();

			}
		}


		return redirect('admin/sanpham');

	}

	public function xoa_sanpham($id)
	{
		$xoa_sanpham = SanphamModel::find($id);
		if ($xoa_sanpham == null)
			return '<script type ="text/JavaScript">alert("loi roi!");</script>';
		$xoa_sanpham->delete();
		return redirect('admin/sanpham');
	}



	public function cn_sanpham_($id, SanphamRequest $request)
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
		$sanpham->updated_at = date("Y-m-d h:i:s");

		$sanpham->save();

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