<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\LoaisanphamModel;
use App\Models\admin\DanhmucModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\LoaisanphamRequest;

class LoaiSanphamController extends Controller
{
    public function theloai()
    {
        $data_theloai = LoaisanphamModel::all();
        $data_danhmuc = DanhmucModel::all();

        return view('AdminRocker.page.LoaiSanPham.index', compact('data_theloai', 'data_danhmuc'));
    }

    public function them_theloai(LoaisanphamRequest $request)
    {
        $data = $request->all();
        $data['ten_loai_slug'] = Str::slug($data['ten_loai']);
        LoaisanphamModel::create($data);
        // dd($data);
        return redirect('admin/theloai');
    }

    public function xoa_theloai($id)
    {
        $xoa_theloai = LoaisanphamModel::find($id);
        if ($xoa_theloai == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $xoa_theloai->delete();
        return redirect('admin/theloai');
    }

    // public function cn_theloai($id)
    // {
    //     $data_danhmuc = DanhmucModel::all();

    //     $cn_theloai = LoaisanphamModel::find($id);
    //     return view('AdminRocker.page.LoaiSanPham.capnhat', compact('cn_theloai', 'data_danhmuc'));
    // }

    public function cn_theloai_($id, LoaisanphamRequest $request)
    {
        $t = LoaisanphamModel::find($id);
        if ($t == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $t->ten_loai = $request->ten_loai;
        $t->ten_loai_slug = Str::slug($t->ten_loai);
        $t->ma_danh_muc = $request->ma_danh_muc;
        $t->updated_at = date("Y-m-d h:i:s");
        $t->save();

        return redirect('admin/theloai');
    }



}