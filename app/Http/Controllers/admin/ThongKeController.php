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
        $data_taikhoan = KhachHangModel::all();
        $tongSoTaiKhoan = $data_taikhoan->count();

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
        
        $data_giohang = HoadonModel::all();
        $tongSoDonHang = $data_giohang->count();
        $TongDoanhThu = HoadonModel::sum('tong_tien');

        $compact = compact(
            'tongSoTaiKhoan', 
            'tongSoDonHang', 
            'TongDoanhThu', 
            'phanTramTaiKhoan', 
            'phanTramDonHang',
            'phanTramDoanhThu'
        );

        return response()->json($compact);
    }

}
