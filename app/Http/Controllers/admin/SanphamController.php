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

class SanphamController extends Controller
{
	public function sanpham()
	{
		$data_Loaisanpham = LoaisanphamModel::all();
		$data_sanpham = DB::table('san_pham')->orderBy('id', 'desc')->paginate(2);
		$data_hinhanh = HinhanhModel::all();
		return view('AdminRocker.page.SanPham.index', compact('data_sanpham', 'data_Loaisanpham', 'data_hinhanh'));
	}

	public function them_sanpham(Request $request)
	{

		$t_ = SanphamModel::where('id', '>', '0')->max('id');

		$data = $request->all();
		$data['ten_san_pham_slug'] = Str::slug($data['ten_san_pham']);

		$get_image = $request->file('hinh_anh');
		// var_dump($get_image);
		if ($get_image) {
			foreach ($get_image as $image) {
				$get_name_image = $image->getClientOriginalName();
				$image->move("img/", $get_name_image);
				$x = new HinhanhModel;
				$x->hinh_anh = $get_name_image;
				$x->ma_san_pham = $t_ + 1;

				$x->save();
				// var_dump($get_name_image);
				// dd($x);
			}
		}

		SanphamModel::create($data);

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

	// public function cn_sanpham($id)
	// {
	// 	$data_Loaisanpham = LoaisanphamModel::all();
	// 	$cn_sanpham = SanphamModel::find($id);
	// 	$data_hinhanh = HinhanhModel::all();

	// 	if ($cn_sanpham == null)
	// 		return '<script type ="text/JavaScript">alert("loi roi!");</script>';
	// 	return view('AdminRocker.page.SanPham.capnhat', compact('cn_sanpham', 'data_Loaisanpham', 'data_hinhanh'));
	// }

	public function cn_sanpham_($id, Request $request)
	{
		$sanpham = SanphamModel::find($id);
		if ($sanpham == null)
			return '<script type ="text/JavaScript">alert("loi roi!");</script>';

		$ma_san_pham = SanphamModel::where('id', '>', '0')->max('id');
		$get_image = $request->file('hinh_anh');
		if ($get_image) {
			foreach ($get_image as $image) {
				$get_name_image = $image->getClientOriginalName();
				$image->move("img/", $get_name_image);
				$hinhanh = new HinhanhModel;
				$hinhanh->hinh_anh = $get_name_image;
				$hinhanh->ma_san_pham = $ma_san_pham;

				$hinhanh->save();

				// var_dump($get_name_image);
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