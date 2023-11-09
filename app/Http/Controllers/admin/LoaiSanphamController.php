<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\LoaisanphamModel;
use App\Models\DanhmucModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\LoaisanphamRequest;

class LoaiSanphamController extends Controller
{
    public function theloai()
    {
        // $data_theloai = LoaisanphamModel::all();
        $data_theloai = LoaisanphamModel::orderBy('id', 'desc')->paginate(10);
        $data_danhmuc = DanhmucModel::all();

        if ($data_theloai->isEmpty()) {
			return view('AdminRocker.page.LoaiSanPham.index', compact('data_theloai', 'data_danhmuc'));
        } else {
            return view('AdminRocker.page.LoaiSanPham.index', compact('data_theloai', 'data_danhmuc'));
        }
    }

    public function them_theloai(LoaisanphamRequest $request)
    {
        $data = $request->all();
        $data['ten_loai_slug'] = Str::slug($data['ten_loai']);
        LoaisanphamModel::create($data);
        // dd($data);
        return redirect('admin/theloai')->with('success', 'Thể loại đã được thêm thành công.');
    }

    public function xoa_theloai($id)
    {
        $xoa_theloai = LoaisanphamModel::find($id);
        if ($xoa_theloai == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $xoa_theloai->delete();
        return redirect('admin/theloai')->with('success', 'Thể loại đã được xóa thành công.');
    }

    public function cn_theloai_($id, LoaisanphamRequest $request)
    {
        $t = LoaisanphamModel::find($id);
        if ($t == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $t->ten_loai = $request->ten_loai;
        $t->ten_loai_slug = Str::slug($t->ten_loai);
        $t->ma_danh_muc = $request->ma_danh_muc;
        $t->save();

        return redirect('admin/theloai')->with('success', 'Thể loại đã được cập nhật thành công.');
    }



}