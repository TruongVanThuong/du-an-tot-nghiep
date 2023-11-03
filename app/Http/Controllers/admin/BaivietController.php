<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaivietModel;
use Illuminate\Support\Str;

class BaivietController extends Controller
{
    public function baiviet()
    {
        $data_baiviet = BaivietModel::all()->paginate(5);

        return view('AdminRocker.page.BaiViet.index', compact('data_baiviet'));
    }
    public function taobaiviet(Request $request)
    {
        if ($request->session()->has('users')) {
            $data_user = $request->session()->get('key');
            $data_form = $request->all();
            $data_form['ten_bai_viet_slug'] = Str::slug($data_form['ten_bai_viet']);
            $data_form['ma_khach_hang']  = $data_user['ma_khach_hang'];
            
        }



        return view('AdminRocker.page.BaiViet.index', compact('data_baiviet'));
    }
}
