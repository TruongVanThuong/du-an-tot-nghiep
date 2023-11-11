<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DanhmucModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\Danh;
use App\Http\Requests\DanhmucRequests;

class DanhmucController extends Controller
{
    public function danhmuc()
    {
        $data_danhmuc = DanhmucModel::orderBy('id', 'desc')->paginate(10);

        if ($data_danhmuc->isEmpty()) {
			return view('AdminRocker.page.DanhMuc.index', compact('data_danhmuc'));
        } else {
            return view('AdminRocker.page.DanhMuc.index', compact('data_danhmuc'));
        }
    }

    public function them_danhmuc(DanhmucRequests $request)
    {
        $data = $request->all();
        $data['ten_danh_muc_slug'] = Str::slug($data['ten_danh_muc']);
        DanhmucModel::create($data);

        // dd($data);
        return redirect('/admin/danhmuc')->with('success', 'Danh mục đã được thêm thành công.');
    }

    public function xoa_danhmuc($id)
    {
        $xoa_danhmuc = DanhmucModel::find($id);
        if ($xoa_danhmuc == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $xoa_danhmuc->delete();
        return redirect('admin/danhmuc')->with('success', 'Danh mục đã được xoá thành công.');
    }

    public function cn_danhmuc_($id, DanhmucRequests $request)
    {
        $data = $request->all();
        if ($data == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $data = $request->except('_token');
        $data['ten_danh_muc_slug'] = Str::slug($data['ten_danh_muc']);
        DanhmucModel::where('id', $id)->update(
            $data 
        );        

        return redirect('admin/danhmuc');
    }

}