<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TKQuanTriRequest;
use App\Models\TaiKhoanModel;
use Illuminate\Http\Request;
use App\Models\PhanquyenModel;

class QLNhanVienController extends Controller
{
    //
    public function QuanLyNhanVien() {
        return view('AdminRocker.page.NhanVien.QuanLyNhanVien');
    }

      
    public function DuLieuNhanVien() {
        $data_taikhoan = TaiKhoanModel::all();
        $data_phanquyen = PhanquyenModel::all();

        $compact = compact('data_taikhoan', 'data_phanquyen');

        return response()->json( $compact );
    }

    public function ThemNhanVien(TKQuanTriRequest $request) {
        $data =  $request->all();
        $data['loai_tai_khoan'] =  2;
        $data['password'] = bcrypt($data['password']);
        TaiKhoanModel::create($data);
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Thêm thành công'
        ]);

    }

    public function XoaNhanVien(Request $request) {
        TaiKhoanModel::where('id', $request->id)->update(
            [
                'loai_tai_khoan' => -1
            ]
        );     
        return response()->json([
            'status'    =>      true,
            'message'   =>      'Đã xóa liên hệ thành công !'
        ]);
    }

    public function CapNhatNhanVien(CapNhatTaikhoanRequest $request) {
        $data =  $request->all();
        $khach_hang = TaiKhoanModel::where('id', $request->id)->first();
        $khach_hang->update($data); 
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Cap nhat thành công'
        ]);      
    }
}
