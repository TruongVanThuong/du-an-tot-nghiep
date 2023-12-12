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
        $data_tintuc = BaivietModel::orderBy('created_at', 'desc')
            ->join('khach_hang', 'bai_viet.ma_khach_hang', '=', 'khach_hang.id')
            ->select('bai_viet.*', 'khach_hang.ho_va_ten')
            ->paginate(9);



        return view('Trang-Khach-Hang.page.TinTuc', compact('data_tintuc'));
        //    var_dump($data_baiviet);
    }
    public function TinTuc_theoloai($id)
    {
        $data_tintuc = BaivietModel::where('loai_tin', $id)
            ->orderBy('created_at', 'desc')
            ->join('khach_hang', 'bai_viet.ma_khach_hang', '=', 'khach_hang.id')
            ->select('bai_viet.*', 'khach_hang.ho_va_ten')
            ->paginate(9);



        return view('Trang-Khach-Hang.page.TinTuc', compact('data_tintuc'));
        //    var_dump($data_baiviet);

    }
    public function TinTucChiTiet($id)
    {
        $baiviet = BaivietModel::find($id);
        $user = KhachHangModel::find($baiviet->ma_khach_hang);
        $baiviet->ma_khach_hang = $user->ho_va_ten;

        $data_lastpost = BaivietModel::orderBy('created_at', 'desc')
        ->join('khach_hang', 'bai_viet.ma_khach_hang', '=', 'khach_hang.id')       
        ->select('bai_viet.*', 'khach_hang.ho_va_ten')->limit(5)->get();

        $check=Auth::guard('khach_hang')->check();
        if($check){
            $khach_hang = Auth::guard('khach_hang')->user();
            return view('Trang-Khach-Hang.page.TinTucChiTiet', compact('baiviet', 'data_lastpost', 'khach_hang'));
        }else{
            return view('Trang-Khach-Hang.page.TinTucChiTiet', compact('baiviet', 'data_lastpost'));
        };
       

       

        

       
        //    var_dump($data_baiviet);
        //  return view('Trang-Khach-Hang.page.TinTucChiTiet');
    }
}
