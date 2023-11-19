<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaikhoanRequest;
use App\Models\KhachHangModel;
use App\Models\PhanquyenModel;
use Illuminate\Http\Request;

class QLTaiKhoanController extends Controller
{
    public function QuanLyTaiKhoan() {
        return view('AdminRocker.page.QuanLyTaiKhoan');
    }
    
    public function DuLieuTaiKhoan() {
        $data_taikhoan = KhachHangModel::all();
        $data_phanquyen = PhanquyenModel::all();

        $compact = compact('data_taikhoan', 'data_phanquyen');

        return response()->json( $compact );
    }

    public function ThemTaiKhoan(TaikhoanRequest $request) {
        echo "hello";
        // $dulieu_input = $request->all();

        // KhachHangModel::create($dulieu_input);

        // return response()->json([
        //     'message'   =>  'Thêm tài khoản thành công',
        // ]);

    }
}
