<?php

namespace App\Http\Controllers\khachhang;

use App\Http\Controllers\Controller;
use App\Models\DanhmucModel;

use App\Models\LoaisanphamModel;
use App\Models\SanphamModel;
use App\Models\HinhanhModel;
use Illuminate\Http\Request;



class TrangChuController extends Controller
{
    public function TrangChu()
    {
        return view('Trang-Khach-Hang.page.TrangChu');
    }
    
    public function SanPhamTatCa()
    {
        $data_san_pham = SanphamModel::all();
        $data_danh_muc = DanhmucModel::all();
        $data_the_loai = LoaisanphamModel::all();

        $HinhAnh = [];
        foreach ($data_san_pham as $sanpham) {
            $hinhAnh = HinhanhModel::where('ma_san_pham', $sanpham->id)->first();
            $HinhAnh[] = $hinhAnh;
        }
        return view('Trang-Khach-Hang.page.SanPhamTatCa', compact('data_danh_muc','data_the_loai','data_san_pham', 'HinhAnh'));
    }
    public function SanPhamDanhMuc($ten_danh_muc)
    {
        $data_san_pham = SanphamModel::all();
        $data_danh_muc = DanhmucModel::where('ten_danh_muc_slug', $ten_danh_muc)->first();
        $data_the_loai = LoaisanphamModel::where('ma_danh_muc', $data_danh_muc->id)->get();

        $HinhAnh = [];
        foreach ($data_san_pham as $sanpham) {
            $hinhAnh = HinhanhModel::where('ma_san_pham', $sanpham->id)->first();
            $HinhAnh[] = $hinhAnh;
        }

        return view('Trang-Khach-Hang.page.SanPhamDanhMuc', compact('data_danh_muc','data_the_loai', 'data_san_pham', 'HinhAnh'));
    }
    public function SanPhamTheLoai($ten_danh_muc,$ten_the_loai)
    {
        $data_danh_muc = DanhmucModel::where('ten_danh_muc_slug', $ten_danh_muc)->first();
        $data_the_loai = LoaisanphamModel::where('ten_loai_slug', $ten_the_loai)->get();
        $data_san_pham = SanphamModel::all();

        $HinhAnh = [];
        foreach ($data_san_pham as $sanpham) {
            $hinhAnh = HinhanhModel::where('ma_san_pham', $sanpham->id)->first();
            $HinhAnh[] = $hinhAnh;
        }
    
        return view('Trang-Khach-Hang.page.SanPhamTheLoai', compact('data_danh_muc','data_the_loai', 'data_san_pham', 'HinhAnh'));
        
        
    }
    public function SanPhamChiTiet($ten_danh_muc,$ten_the_loai,$ten_san_pham)
    {
        $data_danh_muc = DanhmucModel::where('ten_danh_muc_slug', $ten_danh_muc)->first();
        $data_the_loai = LoaisanphamModel::where('ten_loai_slug', $ten_the_loai)->first();
        $data_san_pham = SanphamModel::where('ten_san_pham_slug', $ten_san_pham)->first();
        $data_hinh_anh = HinhanhModel::all();

        // $HinhAnh = [];
        // foreach ($data_san_pham as $sanpham) {
            $HinhAnh = HinhanhModel::where('ma_san_pham', $data_san_pham->id)->first();
            // $HinhAnh[] = $hinhAnh;
        // }
 
        return view('Trang-Khach-Hang.page.SanPhamChiTiet', compact('data_danh_muc','data_the_loai', 'data_san_pham', 'data_hinh_anh', 'HinhAnh'));
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
    public function TimKiemGet()
    {
        
        $data_san_pham = SanphamModel::all();
        $data_danh_muc = DanhmucModel::all();
        $data_the_loai = LoaisanphamModel::all();

        $HinhAnh = [];
        foreach ($data_san_pham as $sanpham) {
            $hinhAnh = HinhanhModel::where('ma_san_pham', $sanpham->id)->first();
            $HinhAnh[] = $hinhAnh;
        }
        
        return view('Trang-Khach-Hang.page.SanPhamTatCa', compact('data_san_pham','data_danh_muc','data_the_loai','HinhAnh'));
    }

    public function TimKiemPost(Request $request)
{
    $search = $request->search;

    // Tìm kiếm sản phẩm theo tên
    $data_san_pham = SanphamModel::where('ten_san_pham', 'like', '%' . $search . '%')->get();

    // Tìm nạp tất cả các danh mục và loại
    $data_danh_muc = DanhmucModel::all();
    $data_the_loai = LoaisanphamModel::all();

    // Đang khởi tạo một mảng trống cho hình ảnh
    $HinhAnh = [];

    // Truy xuất hình ảnh cho từng sản phẩm
    foreach ($data_san_pham as $sanpham) {
        $hinhAnh = HinhanhModel::where('ma_san_pham', $sanpham->id)->first();
        $HinhAnh[] = $hinhAnh;
    }

    // Đang khởi tạo $data_tim_kiem (thay thế bằng logic thực tế của bạn)
    $data_tim_kiem = "Một số giá trị hoặc logic để đặt biến";

    // Trả về chế độ xem với các biến được nén
    return view('Trang-Khach-Hang.page.TimKiemSanpham', compact('data_tim_kiem', 'data_san_pham', 'data_danh_muc', 'data_the_loai', 'HinhAnh'));
}
    
}
