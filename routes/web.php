<?php

use App\Http\Controllers\admin\DanhmucController;
use App\Http\Controllers\admin\hinhanhController;
use App\Http\Controllers\admin\LoaiSanphamController;
use App\Http\Controllers\admin\SanphamController;
use App\Http\Controllers\khachhang\TrangChuController;
use App\Http\Controllers\khachhang\KhachHangController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'name' => 'AdminRocker.'], function () {
  //sanpham
  Route::get('/sanpham', [SanphamController::class, 'sanpham']);
  Route::post('/sanpham', [SanphamController::class, 'them_sanpham']);
  Route::get('/xoasanpham/{id}', [SanphamController::class, 'xoa_sanpham']);
  // Route::get('/capnhatsanpham/{id}', [SanphamController::class, 'cn_sanpham']);
  Route::post('/capnhatsanpham/{id}', [SanphamController::class, 'cn_sanpham_']);


  // Hình Ảnh
  Route::get('/xoahinhanh/{id}/{id_cn}', [hinhanhController::class, 'xoa_hinhanh']);

  //danhmuc
  Route::get('/danhmuc', [DanhmucController::class, 'danhmuc']);
  Route::post('/danhmuc', [DanhmucController::class, 'them_danhmuc']);
  Route::get('/xoadanhmuc/{id}', [DanhmucController::class, 'xoa_danhmuc']);
  // Route::get('/capnhatdanhmuc/{id}', [DanhmucController::class, 'cn_danhmuc']);
  Route::post('/capnhatdanhmuc/{id}', [DanhmucController::class, 'cn_danhmuc_']);


  //the loai
  Route::get('/theloai', [LoaiSanphamController::class, 'theloai']);
  Route::post('/theloai', [LoaiSanphamController::class, 'them_theloai']);
  Route::get('/xoatheloai/{id}', [LoaiSanphamController::class, 'xoa_theloai']);
  // Route::get('/capnhattheloai/{id}', [LoaiSanphamController::class, 'cn_theloai']);
  Route::post('/capnhattheloai/{id}', [LoaiSanphamController::class, 'cn_theloai_']);
});



Route::get('/', [TrangChuController::class, 'TrangChu']);
// ĐĂNG NHẬP
Route::get('/dang-nhap', [KhachHangController::class, 'DangNhap']);
Route::post('/kich-hoat-dang-nhap', [KhachHangController::class, 'KichHoatDangNhap']);
// ĐĂNG KÝ
Route::get('/dang-ky',   [KhachHangController::class, 'DangKy']);
Route::post('/kich-hoat-dang-ky', [KhachHangController::class, 'KichHoatDangKy']);
Route::get('/kich-hoat-mail-tai-khoang/{ma_bam}', [KhachHangController::class, 'KichHoatMailTaiKhoang']);
// QUÊN MẠT KHẨU
Route::get('/quen-mat-khau',   [KhachHangController::class, 'QuenMatKhau']);
Route::post('/kich-hoat-quen-mat-khau', [KhachHangController::class, 'KichHoatQuenMatKhau']);
Route::get('/kich-hoat-mail-doi-mat-khau/{ma_bam_quen_mat_khau}', [KhachHangController::class, 'KichHoatMailDoiMatKhau']);
Route::post('/kich-hoat-doi-mat-khau', [KhachHangController::class, 'KichHoatDoiMatKhau']);
//

Route::get('/san-pham-tat-ca', [TrangChuController::class, 'SanPhamTatCa']);
Route::get('/san-pham-nam', [TrangChuController::class, 'SanPhamNam']);
Route::get('/san-pham-nu', [TrangChuController::class, 'SanPhamNu']);
Route::get('/san-pham-tre-em', [TrangChuController::class, 'SanPhamTreEm']);
Route::get('/san-pham-chi-tiet', [TrangChuController::class, 'SanPhamChiTiet']);
Route::get('/gio-hang', [TrangChuController::class, 'GioHang']);
Route::get('/thanh-toan', [TrangChuController::class, 'ThanhToan']);
Route::get('/thanh-toan', [TrangChuController::class, 'ThanhToan']);
Route::get('/tin-tuc', [TrangChuController::class, 'TinTuc']);
Route::get('/tin-tuc-chi-tiet', [TrangChuController::class, 'TinTucChiTiet']);
Route::get('/lien-he', [TrangChuController::class, 'LienHe']);
Route::get('/gioi-thieu', [TrangChuController::class, 'GioiThieu']);
