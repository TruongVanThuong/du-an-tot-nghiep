<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HinhanhModel;
use Illuminate\Http\Request;
use App\Models\SanphamModel;
use App\Models\LoaisanphamModel;


class hinhanhController extends Controller
{
    public function xoa_hinhanh($id, $id_cn)
    {
        $xoa = HinhanhModel::find($id);
        if ($xoa == null) {
            echo '<script type ="text/JavaScript">alert("loi roi!");</script>';
        } else {
            $xoa->delete();
            $data_Loaisanpham = LoaisanphamModel::all();
            $data_hinhanh = HinhanhModel::all();
            $cn_sanpham = SanphamModel::find($id_cn);
            return view('AdminRocker.page.SanPham.capnhat', compact('data_hinhanh', 'cn_sanpham', 'data_Loaisanpham'));
        }
        // return redirect('admin/sanphamcapnhat/' . $id_cn);
    }
}