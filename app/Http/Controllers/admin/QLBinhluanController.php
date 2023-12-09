<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\binh_luan_bai_viets;
use App\Models\BinhluanModel;
use App\Models\KhachHangModel;
use Illuminate\Support\Facades\Auth;
class QLBinhluanController extends Controller
{
    //
    public function binhluan_baiviet()
    {
        $data_binhluan_baiviet = binh_luan_bai_viets::orderBy('created_at','desc')->paginate(5);
        
        foreach ($data_binhluan_baiviet as $binhluan) {
            $user = KhachHangModel::find($binhluan->ma_khach_hang);
            $binhluan->ma_khach_hang = $user->ho_va_ten;
            
        }

        // return view('AdminRocker.page.BaiViet.index', compact('data_binhluan_baiviet'));
        return response()->json(['data_binhluan_baiviet',200]);
        
    }
    public function binhluan_sanpham()
    {
        $data_binhluan_sanpham = BinhluanModel::orderBy('created_at','desc')->paginate(5);
        
        foreach ($data_binhluan_sanpham as $binhluan) {
            $user = KhachHangModel::find($binhluan->ma_khach_hang);
            $binhluan->ma_khach_hang = $user->ho_va_ten;
            
        }

        return view('AdminRocker.page.BaiViet.index', compact('data_binhluan_sanpham'));
        
    }


}
