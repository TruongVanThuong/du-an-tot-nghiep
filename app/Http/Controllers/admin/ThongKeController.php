<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HoadonModel;
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
        // ================================ TAI KHOAN =================================================
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

        $topKhachHangs = HoadonModel::select('ma_khach_hang', DB::raw('SUM(tong_tien) as tong_tien_mua'))
        ->groupBy('ma_khach_hang')
        ->orderBy('tong_tien_mua', 'desc')
        ->limit(5)
        ->get();
        $data_TaiKhoan = KhachHangModel::get();
        // Kết hợp dữ liệu từ hai bảng
        $result = $topKhachHangs->map(function ($topKhachHang) use ($data_TaiKhoan) {
            $khachHang = $data_TaiKhoan->where('id', $topKhachHang->ma_khach_hang)->first();
            if ($khachHang) {
                // Thêm thông tin từ bảng KhachHangModel vào đối tượng HoadonModel
                $topKhachHang->ho_va_ten = $khachHang->ho_va_ten ;
                $topKhachHang->email = $khachHang->email ;
                $topKhachHang->loai_tai_khoan = $khachHang->loai_tai_khoan ;
                $topKhachHang->created_at_KH = Carbon::parse($khachHang->created_at)->format('d/m/Y');
            }
        });
        $tongSoTaiKhoan = KhachHangModel::count();
        $TaiKhoanHuy = KhachHangModel::where('loai_tai_khoan', -1)->count();
        $TaiKhoanChuaKH = KhachHangModel::where('loai_tai_khoan', 0)->count();
        $TaiKhoanKhachHang = KhachHangModel::where('loai_tai_khoan', 1)->count();
        $TaiKhoanNhanVien = KhachHangModel::where('loai_tai_khoan', 2)->count();
        $TaiKhoanAdmin = KhachHangModel::where('loai_tai_khoan', 3)->count();

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
        $tongSoDoanhThuTuanNay = HoadonModel::whereBetween('created_at', [$BatDauTruocTuan, $BatDauSauTuan])->sum('tong_tien');
        // Lấy tổng số doanh thu tuần trước
        $tongSoDoanhThuTuanTruoc = HoadonModel::whereBetween('created_at', [$DauTuanTruoc, $CuoiTuanTruoc])->sum('tong_tien');
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
        $TongDoanhThu = HoadonModel::sum('tong_tien');

        $compact = compact(
            'tongSoTaiKhoan', 
            'tongSoDonHang', 
            'TongDoanhThu', 
            'phanTramTaiKhoan', 
            'phanTramDonHang',
            'phanTramDoanhThu',
            'TaiKhoanHuy',
            'TaiKhoanChuaKH',
            'TaiKhoanKhachHang',
            'TaiKhoanNhanVien',
            'TaiKhoanAdmin',
            'topKhachHangs',
            'data_TaiKhoan',

        );

        return response()->json($compact);
    }

}
