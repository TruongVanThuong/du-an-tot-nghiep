<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BaivietRequest;
use Illuminate\Http\Request;
use App\Models\BaivietModel;
use App\Models\KhachHangModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class BaivietController extends Controller
{
    public function baiviet(Request $request)
    {
        $data_baiviet = BaivietModel::all();

        foreach ($data_baiviet as $baiviet) {
            $user = KhachHangModel::find($baiviet->ma_khach_hang);
            $baiviet->ma_khach_hang = $user->ho_va_ten;
            
        }

        return view('AdminRocker.page.BaiViet.index', compact('data_baiviet'));
        //    var_dump($data_baiviet);
    }
    public function taobaiviet(Request $request)
    {

        $khach_hang = Auth::guard('khach_hang')->user();
        $data_form = $request->all();
        $data_form['ten_bai_viet_slug'] = Str::slug($data_form['ten_bai_viet']);
        $data_form['ma_khach_hang']  = $khach_hang->id;

        $get_image = $request->file('hinh_anh');
        $get_name_image = $get_image->getClientOriginalName();
        $images = Image::make($get_image->getRealPath());
       
        $images->save(public_path('img/' . $get_name_image));

        $data_form['hinh_anh']  = $get_name_image;
        BaivietModel::create($data_form);

        // var_dump($data_form);
        $data_baiviet = BaivietModel::all();

        foreach ($data_baiviet as $baiviet) {
            $user = KhachHangModel::find($baiviet->ma_khach_hang);
            $baiviet->ma_khach_hang = $user->ho_va_ten;
        }
        return view('AdminRocker.page.BaiViet.index', compact('data_baiviet'));
    }
}
