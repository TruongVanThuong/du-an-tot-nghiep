<?php

namespace App\Http\Controllers\khachhang;

use App\Http\Controllers\Controller;
use App\Models\DanhmucModel;
use App\Models\LoaisanphamModel;
use App\Models\SanphamModel;
use App\Models\HinhanhModel;

class TrangChuController extends Controller
{
    public function TrangChu()
    {
        return view('Trang-Khach-Hang.page.TrangChu');
    }

    public function SanPhamTatCa()
    {
        $san_pham_tat_ca = DanhmucModel::join('loai_san_pham', 'danh_muc.id', '=', 'loai_san_pham.ma_danh_muc')
            ->join('san_pham', 'loai_san_pham.id', '=', 'san_pham.ma_loai')
            ->join('hinh_anh', function ($join) {
                $join->on('san_pham.id', '=', 'hinh_anh.ma_san_pham')
                    ->whereRaw('hinh_anh.id = (select min(id) from hinh_anh where hinh_anh.ma_san_pham = san_pham.id)');
            })
            ->select('san_pham.*', 'loai_san_pham.ten_loai_slug', 'hinh_anh.hinh_anh', 'danh_muc.ten_danh_muc_slug')
            ->get();

        return view('Trang-Khach-Hang.page.SanPhamTatCa', compact('san_pham_tat_ca'));
    }

    public function SanPhamDanhMuc($ten_danh_muc_slug)
    {
        $san_pham_danh_muc = DanhmucModel::where('ten_danh_muc_slug', $ten_danh_muc_slug)
            ->join('loai_san_pham', 'danh_muc.id', '=', 'loai_san_pham.ma_danh_muc')
            ->join('san_pham', 'loai_san_pham.id', '=', 'san_pham.ma_loai')
            ->join('hinh_anh', function ($join) {
                $join->on('san_pham.id', '=', 'hinh_anh.ma_san_pham')
                    ->whereRaw('hinh_anh.id = (select min(id) from hinh_anh where hinh_anh.ma_san_pham = san_pham.id)');
            })
            ->select('san_pham.*', 'loai_san_pham.ten_loai_slug', 'hinh_anh.hinh_anh', 'danh_muc.ten_danh_muc_slug')
            ->get();

        return view("Trang-Khach-Hang.page.SanPhamDanhMuc", compact('san_pham_danh_muc'));
    }

    public function SanPhamTheLoai($ten_danh_muc_slug, $ten_loai_slug)
    {
        $san_pham_the_loai = LoaisanphamModel::where('ten_loai_slug', $ten_loai_slug)
            ->join('san_pham', 'loai_san_pham.id', '=', 'san_pham.ma_loai')
            ->join('hinh_anh', function ($join) {
                $join->on('san_pham.id', '=', 'hinh_anh.ma_san_pham')
                    ->whereRaw('hinh_anh.id = (select min(id) from hinh_anh where hinh_anh.ma_san_pham = san_pham.id)');
            })
            ->join('danh_muc', 'danh_muc.id', '=', 'loai_san_pham.ma_danh_muc')
            ->where('danh_muc.ten_danh_muc_slug', $ten_danh_muc_slug)
            ->select('san_pham.*', 'loai_san_pham.ten_loai_slug', 'hinh_anh.hinh_anh', 'danh_muc.ten_danh_muc_slug')
            ->get();

        return view('Trang-Khach-Hang.page.SanPhamTheLoai', compact('san_pham_the_loai'));
    }


    public function SanPhamChiTiet($ten_danh_muc_slug, $ten_loai_slug, $ten_san_pham_slug)
    {
        $san_pham_chi_tiet = DanhmucModel::where('ten_danh_muc_slug', $ten_danh_muc_slug)
            ->join('loai_san_pham', 'danh_muc.id', '=', 'loai_san_pham.ma_danh_muc')
            ->where('loai_san_pham.ten_loai_slug', $ten_loai_slug)
            ->join('san_pham', 'loai_san_pham.id', '=', 'san_pham.ma_loai')
            ->where('san_pham.ten_san_pham_slug', $ten_san_pham_slug)
            ->first();
    
            // dd($$san_pham_chi_tiet->id);
        $hinh_anh_san_pham = HinhAnhModel::where('ma_san_pham', $san_pham_chi_tiet->id)->get();
    
        return view('Trang-Khach-Hang.page.SanPhamChiTiet', compact('san_pham_chi_tiet', 'hinh_anh_san_pham'));
    }
    

    public function GioHang()
    {
        return view('Trang-Khach-Hang.page.GioHang');
    }
    public function ThanhToan()
    {
        return view('Trang-Khach-Hang.page.ThanhToan');
    }
    public function TinTuc()
    {
        return view('Trang-Khach-Hang.page.TinTuc');
    }
    public function TinTucChiTiet()
    {
        return view('Trang-Khach-Hang.page.TinTucChiTiet');
    }

    public function GioiThieu()
    {
        return view('Trang-Khach-Hang.page.GioiThieu');
    }
}
