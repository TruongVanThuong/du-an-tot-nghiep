<?php

namespace App\Http\Controllers\khachhang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaivietModel;
use App\Models\KhachHangModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class TinTucController extends Controller
{
    public function TinTuc(Request $request)
    {
        $data_tintuc = BaivietModel::orderBy('created_at', 'desc')->paginate(9);

        foreach ($data_tintuc as $baiviet) {
            $user = KhachHangModel::find($baiviet->ma_khach_hang);
            $baiviet->ma_khach_hang = $user->ho_va_ten;
        }

        return view('Trang-Khach-Hang.page.TinTuc', compact('data_tintuc'));
        //    var_dump($data_baiviet);
    }
    public function TinTuc_theoloai($id)
    {
        $data_tintuc = BaivietModel::where('loai_tin', $id)
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        foreach ($data_tintuc as $baiviet) {
            $user = KhachHangModel::find($baiviet->ma_khach_hang);
            $baiviet->ma_khach_hang = $user->ho_va_ten;
        }

        return view('Trang-Khach-Hang.page.TinTuc', compact('data_tintuc'));
        //    var_dump($data_baiviet);

    }
    public function TinTucChiTiet($id)
    {
        $baiviet = BaivietModel::find($id);
        $user = KhachHangModel::find($baiviet->ma_khach_hang);
        $baiviet->ma_khach_hang = $user->ho_va_ten;
        $khach_hang = Auth::guard('khach_hang')->user();
        
        $data_lastpost = BaivietModel::orderBy('created_at', 'desc')->limit(5)->get();

        foreach ($data_lastpost as $lastpost) {
            $user = KhachHangModel::find($lastpost->ma_khach_hang);
            $lastpost->ma_khach_hang = $user->ho_va_ten;
        }

        return view('Trang-Khach-Hang.page.TinTucChiTiet', compact('baiviet','data_lastpost','khach_hang'));
        //    var_dump($data_baiviet);
        //  return view('Trang-Khach-Hang.page.TinTucChiTiet');
    }
}
