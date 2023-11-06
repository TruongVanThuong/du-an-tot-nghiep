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
        return redirect('/admin/danhmuc');
    }

    public function xoa_danhmuc($id)
    {
        $xoa_danhmuc = DanhmucModel::find($id);
        if ($xoa_danhmuc == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $xoa_danhmuc->delete();
        return redirect('admin/danhmuc');
    }

    public function cn_danhmuc_($id, DanhmucRequests $request)
    {
        $danhmuc = DanhmucModel::find($id);
        if ($danhmuc == null){
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        }
        $danhmuc->ten_danh_muc = $request->ten_danh_muc;
        $danhmuc->ten_danh_muc_slug = Str::slug($danhmuc->ten_danh_muc);
        $danhmuc->updated_at = date("Y-m-d h:i:s");
        // $danhmuc->save();
        echo $request->ten_danh_muc;
        dd($request);
        // return redirect('admin/danhmuc');
    }



}