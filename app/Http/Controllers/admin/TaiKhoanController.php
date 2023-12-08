<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DangNhapQuanTri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TaiKhoanController extends Controller
{
    public function DangNhap() {
        return view('AdminRocker.page.TaiKhoan.DangNhap');
    }

    public function KichHoatDangNhap(DangNhapQuanTri $request) {
        $du_lieu['email']      = $request->email;
        $du_lieu['password']   = $request->password;

        // dd($du_lieu);
        $kiem_tra = Auth::guard('tai_khoan')->attempt($du_lieu);
        // dd($kiem_tra);
        if ($kiem_tra) {
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản hoặc mật khẩu không đúng',
            ]);
        }
    }

    public function DangXuat()
    {
        Auth::guard('tai_khoan')->logout();  //nếu đăng nhập mới đăng xuất đc
        toastr()->success('Đăng Xuất Thành Công');
        return redirect('/admin');
    }
}
