<?php

namespace App\Http\Controllers\khachhang;

use App\Http\Controllers\Controller;
use App\Models\DanhmucModel;

use App\Models\LoaisanphamModel;
use App\Models\SanphamModel;
use App\Models\HinhanhModel;
use App\Models\SanPhamYeuThich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrangChuController extends Controller
{
    public function TrangChu()
    {
        $san_pham_yeu_thich = SanPhamYeuThich::join('san_pham', 'san_pham_yeu_thichs.ma_san_pham', '=', 'san_pham.id')
            ->join('hinh_anh', function ($join) {
                $join->on('san_pham.id', '=', 'hinh_anh.ma_san_pham')
                    ->whereRaw('hinh_anh.id = (select min(id) from hinh_anh where hinh_anh.ma_san_pham = san_pham.id)');
            })
            ->join('loai_san_pham', 'san_pham.ma_loai', '=', 'loai_san_pham.id') // Nối bảng loai_san_pham
            ->join('danh_muc', 'loai_san_pham.ma_danh_muc', '=', 'danh_muc.id') // Nối bảng danh_muc
            ->select('san_pham.id as ma_san_pham', 'san_pham.is_delete', 'san_pham.ten_san_pham', 'san_pham.ten_san_pham_slug', 'san_pham.gia_san_pham', 'san_pham.giam_gia_san_pham', 'hinh_anh.hinh_anh', 'loai_san_pham.ten_loai_slug', 'danh_muc.ten_danh_muc_slug', DB::raw('COUNT(san_pham_yeu_thichs.ma_san_pham) AS so_lan_xuat_hien'))
            ->groupBy('san_pham.id', 'san_pham.ten_san_pham', 'san_pham.is_delete', 'san_pham.gia_san_pham', 'san_pham.ten_san_pham_slug', 'san_pham.giam_gia_san_pham', 'hinh_anh.hinh_anh', 'loai_san_pham.ten_loai_slug', 'danh_muc.ten_danh_muc_slug')
            ->orderByDesc('so_lan_xuat_hien')
            ->limit(8)
            ->get();
        // dd($san_pham_yeu_thich);
        // Lấy danh mục
        $danhMuc = DanhmucModel::where('is_delete', 0)->get();
        // Lấy 8 sản phẩm yêu thích xuất hiện nhiều nhất cho mỗi danh mục
        $san_pham_danh_muc = [];
        foreach ($danhMuc as $danhmuc) {
            $san_pham_yeu_thich_danh_muc = SanPhamYeuThich::join('san_pham', 'san_pham_yeu_thichs.ma_san_pham', '=', 'san_pham.id')
                ->join('hinh_anh', function ($join) {
                    $join->on('san_pham.id', '=', 'hinh_anh.ma_san_pham')
                        ->whereRaw('hinh_anh.id = (select min(id) from hinh_anh where hinh_anh.ma_san_pham = san_pham.id)');
                })
                ->join('loai_san_pham', 'san_pham.ma_loai', '=', 'loai_san_pham.id')
                ->join('danh_muc', 'loai_san_pham.ma_danh_muc', '=', 'danh_muc.id')
                ->where('danh_muc.id', $danhmuc->id)
                ->select('san_pham.id as ma_san_pham', 'san_pham.ten_san_pham', 'san_pham.gia_san_pham', 'san_pham.giam_gia_san_pham', 'hinh_anh.hinh_anh', 'loai_san_pham.ten_loai_slug', 'danh_muc.ten_danh_muc_slug', 'san_pham.ten_san_pham_slug', DB::raw('COUNT(san_pham_yeu_thichs.ma_san_pham) AS so_lan_xuat_hien'), 'danh_muc.ten_danh_muc_slug AS ten_danh_muc_slug')
                ->groupBy('san_pham.id', 'san_pham.ten_san_pham', 'san_pham.gia_san_pham', 'san_pham.giam_gia_san_pham', 'hinh_anh.hinh_anh', 'loai_san_pham.ten_loai_slug', 'danh_muc.ten_danh_muc_slug', 'san_pham.ten_san_pham_slug')
                ->orderByDesc('so_lan_xuat_hien')
                ->limit(8) // Thay đổi từ limit thành take
                ->get();

            $san_pham_danh_muc[$danhmuc->id] = $san_pham_yeu_thich_danh_muc;
        }
        // dd($san_pham_danh_muc);
        return view('Trang-Khach-Hang.page.TrangChu', compact('san_pham_yeu_thich', 'san_pham_danh_muc',));
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

        return view('Trang-Khach-Hang.page.SanPhamTatCa', compact('data_san_pham', 'data_danh_muc', 'data_the_loai', 'HinhAnh'));
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
