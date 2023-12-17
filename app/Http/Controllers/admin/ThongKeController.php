<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BinhluanModel;
use App\Models\HoadonModel;
use App\Models\LienheModel;
use App\Models\SanPhamYeuThich;
use App\Models\TaiKhoanModel;
use Illuminate\Http\Request;
use App\Models\KhachHangModel;
use App\Models\HinhanhModel;
use App\Models\SanphamModel;
use App\Models\LoaisanphamModel;
use App\Models\DanhmucModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ThongKeController extends Controller
{
    public function index()
    {
        return view('AdminRocker.page.ThongKe');
    }

    public function DuLieuThongKe()
    {

        // Tính toán khoảng thời gian cho tuần này và tuần trước
        $BatDauTruocTuan = Carbon::now()->startOfWeek();
        $BatDauSauTuan = Carbon::now()->endOfWeek();

        $DauTuanTruoc = Carbon::now()->subWeek()->startOfWeek();
        $CuoiTuanTruoc = Carbon::now()->subWeek()->endOfWeek();

        // ============================================================================================
        // =========================== TAI KHOAN KHACH HANG ===========================================
        // ============================================================================================
        // Lấy tổng số tài khoản tuần này
        $tongSoTaiKhoanTuanNay = KhachHangModel::whereBetween('created_at', [$BatDauTruocTuan, $BatDauSauTuan])->count();
        // Lấy tổng số tài khoản tuần trước
        $tongSoTaiKhoanTuanTruoc = KhachHangModel::whereBetween('created_at', [$DauTuanTruoc, $CuoiTuanTruoc])->count();
        
        //
        if ($tongSoTaiKhoanTuanTruoc != 0) {
            if($tongSoTaiKhoanTuanNay == $tongSoTaiKhoanTuanTruoc) {
                $phanTramTaiKhoan = 0;
            }else  {
                $phanTramTaiKhoan = number_format((($tongSoTaiKhoanTuanNay - $tongSoTaiKhoanTuanTruoc) / $tongSoTaiKhoanTuanTruoc) * 100, 2, '.', '');
            } 
        } else {
            if($tongSoTaiKhoanTuanNay == $tongSoTaiKhoanTuanTruoc) {
                $phanTramTaiKhoan = 0;
            }else  {
            // Gán giá trị mặc định nếu $tongSoDonHangTuanTruoc là 0
                $phanTramTaiKhoan = 100;
            }
        }  

        $topKhachHangs = HoadonModel::select('ma_khach_hang', DB::raw('SUM(tong_tien_tat_ca) as tong_tien_mua'))
        ->groupBy('ma_khach_hang')
        ->orderBy('tong_tien_mua', 'desc')
        ->limit(7)
        ->get();
        $data_KhachHang = KhachHangModel::get();
        // Kết hợp dữ liệu từ hai bảng
        $result = $topKhachHangs->map(function ($topKhachHang) use ($data_KhachHang) {
            $khachHang = $data_KhachHang->where('id', $topKhachHang->ma_khach_hang)->first();
            if ($khachHang) {
                // Thêm thông tin từ bảng KhachHangModel vào đối tượng HoadonModel
                $topKhachHang->ho_va_ten = $khachHang->ho_va_ten ;
                $topKhachHang->email = $khachHang->email ;
                $topKhachHang->loai_tai_khoan = $khachHang->loai_tai_khoan ;
                $topKhachHang->created_at_KH = Carbon::parse($khachHang->created_at)->format('d/m/Y');
            }
        });
        $tongSoKhachHang = KhachHangModel::count();
        $TaiKhoanHuy = KhachHangModel::where('loai_tai_khoan', -1)->count();
        $TaiKhoanChuaKH = KhachHangModel::where('loai_tai_khoan', 0)->count();
        $TaiKhoanKhachHang = KhachHangModel::where('loai_tai_khoan', 1)->count();


        // ============================================================================================
        // =========================== TAI KHOAN QUẢN TRỊ VIÊN ===========================================
        // ============================================================================================
        // Lấy tổng số tài khoản tuần này
        $tongSoNhanVienTuanNay = TaiKhoanModel::whereBetween('created_at', [$BatDauTruocTuan, $BatDauSauTuan])->count();
        // Lấy tổng số tài khoản tuần trước
        $tongSoNhanVienTuanTruoc = TaiKhoanModel::whereBetween('created_at', [$DauTuanTruoc, $CuoiTuanTruoc])->count();
        
        //
        if ($tongSoNhanVienTuanTruoc != 0) {
            if($tongSoNhanVienTuanNay == $tongSoNhanVienTuanTruoc) {
                $phanTramNhanVien = 0;
            }else  {
                $phanTramNhanVien = number_format((($tongSoNhanVienTuanNay - $tongSoNhanVienTuanTruoc) / $tongSoTaiKhoanTuanTruoc) * 100, 2, '.', '');
            } 
        } else {
            if($tongSoNhanVienTuanNay == $tongSoNhanVienTuanTruoc) {
                $phanTramNhanVien = 0;
            }else  {
            // Gán giá trị mặc định nếu $tongSoDonHangTuanTruoc là 0
                $phanTramNhanVien = 100;
            }
        }  


        $TaiKhoanNhanVien = TaiKhoanModel::get();
        
        $tongSoQuanTri = TaiKhoanModel::count();
        $TaiKhoanNVBH = TaiKhoanModel::where('loai_tai_khoan', 2)->count();
        $TaiKhoanNVDB = TaiKhoanModel::where('loai_tai_khoan', 3)->count();
        $TaiKhoanQuanLy = TaiKhoanModel::where('loai_tai_khoan', 4)->count();
        $TaiKhoanQuanTriVien = TaiKhoanModel::where('loai_tai_khoan', 5)->count();


        // ============================================================================================
        // ================================ HOA DON =================================================
        // ============================================================================================
        // Lấy tổng số hoa don tuần này
        $tongSoDonHangTuanNay = HoadonModel::whereBetween('created_at', [$BatDauTruocTuan, $BatDauSauTuan])->count();
        // Lấy tổng số hoa don tuần trước
        $tongSoDonHangTuanTruoc = HoadonModel::whereBetween('created_at', [$DauTuanTruoc, $CuoiTuanTruoc])->count();
        //
        if ($tongSoDonHangTuanTruoc != 0) {
            if($tongSoDonHangTuanNay == $tongSoDonHangTuanTruoc) {
                $phanTramDonHang = 0;
            }else  {
                $phanTramDonHang = number_format((($tongSoDonHangTuanNay - $tongSoDonHangTuanTruoc) / $tongSoDonHangTuanTruoc) * 100, 2, '.', '');            
            } 
            
        } else {
            if($tongSoDonHangTuanNay == $tongSoDonHangTuanTruoc) {
                $phanTramDonHang = 0;
            }else  {
            // Gán giá trị mặc định nếu $tongSoDonHangTuanTruoc là 0
                $phanTramDonHang = 100;
            }    
        } 
        
        
        // Lấy tổng số doanh thu tuần này
        $tongSoDoanhThuTuanNay = HoadonModel::whereBetween('created_at', [$BatDauTruocTuan, $BatDauSauTuan])->sum('tong_tien_tat_ca');
        // Lấy tổng số doanh thu tuần trước
        $tongSoDoanhThuTuanTruoc = HoadonModel::whereBetween('created_at', [$DauTuanTruoc, $CuoiTuanTruoc])->sum('tong_tien_tat_ca');
        //
        if ($tongSoDoanhThuTuanTruoc != 0) {
            if($tongSoDoanhThuTuanNay == $tongSoDoanhThuTuanTruoc) {
                $phanTramDoanhThu = 0;
            }else  {
                $phanTramDoanhThu = number_format((($tongSoDoanhThuTuanNay - $tongSoDoanhThuTuanTruoc) / $tongSoDoanhThuTuanTruoc) * 100, 2, '.', '');
            } 
        }
         else {
            if($tongSoDoanhThuTuanNay == $tongSoDoanhThuTuanTruoc) {
                $phanTramDoanhThu = 0;
            }else  {
            // Gán giá trị mặc định nếu $tongSoDoanhThuTuanTruoc là 0
                $phanTramDoanhThu = 100;
            }
        } 
        
        $tongSoDonHang = HoadonModel::count();
        $TongDoanhThu = HoadonModel::sum('tong_tien_tat_ca');



        // ============================================================================================
        // =============================== CÁC SẢN PHẨM ===============================================
        // ============================================================================================

        $tongSoSanPham = SanphamModel::count();
        $tongSoSanPhamYeuThich = SanPhamYeuThich::count();
        $tongSoBinhLuan = BinhluanModel::count();
        $tongSoLienHe = LienheModel::count();
        $data_danhmuc = DanhmucModel::get();
        $DemTatCaSanPham = [];
        
        foreach ($data_danhmuc as $danhmuc) {
            $DemSanPham = DB::table('loai_san_pham')
                ->join('danh_muc', 'loai_san_pham.ma_danh_muc', '=', 'danh_muc.id')
                ->leftJoin('san_pham', 'loai_san_pham.id', '=', 'san_pham.ma_loai')
                ->whereIn('loai_san_pham.ma_danh_muc', [$danhmuc->id])  // Sửa thành mảng để phù hợp với whereIn
                ->groupBy(
                    'danh_muc.id', 
                    'danh_muc.ten_danh_muc', 
                    // 'loai_san_pham.id', 
                    // 'loai_san_pham.ten_loai'
                )
                ->select(
                    'danh_muc.id as ma_danh_muc', 
                    // 'loai_san_pham.id as ma_loai', 
                    'danh_muc.ten_danh_muc', 
                    // 'loai_san_pham.ten_loai', 
                    DB::raw('COUNT(san_pham.id) as so_luong_san_pham')
                    )
                ->get();
        
            $DemTatCaSanPham[$danhmuc->id] = $DemSanPham;
        }



        $compact = compact(
            'tongSoKhachHang', 
            'tongSoDonHang', 
            'TongDoanhThu', 
            'phanTramTaiKhoan', 
            'phanTramDonHang',
            'phanTramDoanhThu',
            'TaiKhoanHuy',
            'TaiKhoanChuaKH',
            'TaiKhoanKhachHang',
            'tongSoSanPham',
            'data_danhmuc',
            'topKhachHangs',
            'data_KhachHang',
            'DemTatCaSanPham',
            'tongSoSanPhamYeuThich',
            'tongSoBinhLuan',
            'tongSoLienHe',
            'TaiKhoanNVBH',
            'TaiKhoanNVDB',
            'TaiKhoanQuanLy',
            'TaiKhoanQuanTriVien',
        );

        return response()->json($compact);
    }

}
