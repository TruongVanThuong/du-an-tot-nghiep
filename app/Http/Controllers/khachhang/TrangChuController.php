<?php

namespace App\Http\Controllers\khachhang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function TrangChu()
    {
        return view('Trang-Khach-Hang.page.TrangChu');
    }
    
    public function SanPhamTatCa()
    {
        return view('Trang-Khach-Hang.page.SanPhamTatCa');
    }
    public function SanPhamNam()
    {
        return view('Trang-Khach-Hang.page.SanPhamNam');
    }
    public function SanPhamNu()
    {
        return view('Trang-Khach-Hang.page.SanPhamNu');
    }
    public function SanPhamTreEm()
    {
        return view('Trang-Khach-Hang.page.SanPhamTreEm');
    }
    public function SanPhamChiTiet()
    {
        return view('Trang-Khach-Hang.page.SanPhamChiTiet');
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
    public function LienHe()
    {
        return view('Trang-Khach-Hang.page.LienHe');
    }
    public function GioiThieu()
    {
        return view('Trang-Khach-Hang.page.GioiThieu');
    }
}
