<?php

use App\Http\Controllers\admin\BaivietController;
use App\Http\Controllers\admin\DanhmucController;
use App\Http\Controllers\admin\hinhanhController;
use App\Http\Controllers\admin\LoaiSanphamController;
use App\Http\Controllers\admin\QLTaiKhoanController;
use App\Http\Controllers\admin\SanphamController;
use App\Http\Controllers\khachhang\GioHangController;
use App\Http\Controllers\admin\ThongKeController;
use App\Http\Controllers\khachhang\TrangChuController;
use App\Http\Controllers\khachhang\KhachHangController;
use App\Http\Controllers\khachhang\LienHeController;
use App\Http\Controllers\khachhang\TinTucController;
use App\Http\Controllers\khachhang\BinhluanTintucController;
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

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'name' => 'AdminRocker'], function () {
  Route::middleware(['NhanVienMiddleware'])->group(function () {

    Route::middleware(['CheckAdminAccess'])->group(function () {
      // thong ke
      Route::get('/thong-ke', [ThongKeController::class, 'index']);

      // Lien He
      Route::group(['prefix' => '/lien-he'], function () {
        Route::get('/', [LienHeController::class, 'QuanLyLienHe']);
        Route::get('/du-lieu', [LienHeController::class, 'LayDuLieu']);
        Route::post('/xoa-lien-he', [LienHeController::class, 'XoaLienHe']);
      });

      // Quan Ly Tai Khoan
      Route::group(['prefix' => '/quan-ly-tai-khoan'], function () {
        Route::get('/', [QLTaiKhoanController::class, 'QuanLyTaiKhoan']);
        Route::get('/du-lieu', [QLTaiKhoanController::class, 'DuLieuTaiKhoan']);
        Route::post('/them-tai-khoan', [QLTaiKhoanController::class, 'ThemTaiKhoan']);
        Route::post('/xoa-tai-khoan', [QLTaiKhoanController::class, 'XoaTaiKhoan']);
        Route::post('/cap-nhat-tai-khoan', [QLTaiKhoanController::class, 'CapNhatTaiKhoan']);

      });

    });

    //sanpham
    Route::get('/sanpham', [SanphamController::class, 'sanpham']);
    Route::post('/sanpham', [SanphamController::class, 'them_sanpham']);
    Route::get('/xoasanpham/{id}', [SanphamController::class, 'xoa_sanpham']);
    Route::post('/capnhatsanpham/{id}', [SanphamController::class, 'cn_sanpham_']);
    Route::get('/toggleStatus', [SanphamController::class, 'toggleStatus']);


    // Hình Ảnh
    Route::get('/xoahinhanh', [hinhanhController::class, 'xoa_hinhanh']);

    //danhmuc
    Route::get('/danhmuc', [DanhmucController::class, 'danhmuc']);
    Route::post('/danhmuc', [DanhmucController::class, 'them_danhmuc']);
    Route::get('/xoadanhmuc/{id}', [DanhmucController::class, 'xoa_danhmuc']);
    Route::post('/capnhatdanhmuc/{id}', [DanhmucController::class, 'cn_danhmuc_']);

    //the loai
    Route::get('/theloai', [LoaiSanphamController::class, 'theloai']);
    Route::post('/theloai', [LoaiSanphamController::class, 'them_theloai']);
    Route::get('/xoatheloai/{id}', [LoaiSanphamController::class, 'xoa_theloai']);
    Route::post('/capnhattheloai/{id}', [LoaiSanphamController::class, 'cn_theloai_']);

    //bài viết
    Route::get('/baiviet', [BaivietController::class, 'baiviet']);
    Route::post('/baiviet', [BaivietController::class, 'taobaiviet']);
    Route::get('/baiviet/{id}', [BaivietController::class, 'xoa_baiviet']);
    Route::post('/capnhat_baiviet/{id}', [BaivietController::class, 'capnhat_baiviet']);
    Route::get('/baiviet/doitrangthai', [BaivietController::class, 'doitrangthai']);
    Route::post('/baiviet/khoiphuc', [BaivietController::class, 'restore']);

  });
});

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//   \vendor\UniSharp\LaravelFilemanager\Lfm::routes();
// });

Route::get('/', [TrangChuController::class, 'TrangChu']);
// ĐĂNG NHẬP
Route::get('/dang-nhap', [KhachHangController::class, 'DangNhap']);
Route::post('/kich-hoat-dang-nhap', [KhachHangController::class, 'KichHoatDangNhap']);
// ĐĂNG KÝ
Route::get('/dang-ky', [KhachHangController::class, 'DangKy']);
Route::post('/kich-hoat-dang-ky', [KhachHangController::class, 'KichHoatDangKy']);
Route::get('/kich-hoat-mail-tai-khoang/{ma_bam}', [KhachHangController::class, 'KichHoatMailTaiKhoang']);
// QUÊN MẠT KHẨU
Route::get('/quen-mat-khau', [KhachHangController::class, 'QuenMatKhau']);
Route::post('/kich-hoat-quen-mat-khau', [KhachHangController::class, 'KichHoatQuenMatKhau']);
Route::get('/kich-hoat-mail-doi-mat-khau/{ma_bam_quen_mat_khau}', [KhachHangController::class, 'KichHoatMailDoiMatKhau']);
Route::post('/doi-mat-khau', [KhachHangController::class, 'KichHoatDoiMatKhau']);
//HỒ SƠ, ĐĂNG XUẤT, ĐỔI MẬT KHẨU 

// Route::get('/lien-he', [LienHeController::class, 'LienHe']);

Route::get('/dang-xuat', [KhachHangController::class, 'DangXuat']);
Route::group(['prefix' => '/khach-hang', 'middleware' => 'KhachHangDangNhap'], function () {
  Route::get('/ho-so', [KhachHangController::class, 'HoSo']);
  Route::get('/thong-tin-khach-hang', [KhachHangController::class, 'ThongTinKhachHang']);
  Route::post('/kich-hoat-cap-nhap-thong-tin', [KhachHangController::class, 'KichHoatCapNhapThongTin']);
  Route::get('/cap-nhap-mat-khau', [KhachHangController::class, 'CapNhapMatKhau']);
  Route::post('/kich-hoat-cap-nhap-mat-khau', [KhachHangController::class, 'KichHoatCapNhapMatKhau']);


  // giỏ hàng 
  Route::get('/hien-thi-ds-gio-hang', [GioHangController::class, 'HienThiDsGioHang']);
  Route::post('/them-so-luong/{id}', [GioHangController::class, 'ThemSoLuong']);
  Route::post('/tru-so-luong/{id}', [GioHangController::class, 'TruSoLuong']);
  Route::post('/xoa-san-pham-gio-hang/{id}', [GioHangController::class, 'XoaSanPhamGioHang']);

});
//Liên hệ
Route::get('/lien-he', [LienHeController::class, 'LienHe']);
Route::post('/gui-lien-he', [LienHeController::class, 'GuiLienHe']);


//

Route::get('/san-pham', [TrangChuController::class, 'SanPhamTatCa']);
Route::get('/san-pham/{ten_danh_muc_slug}', [TrangChuController::class, 'SanPhamDanhMuc']);
Route::get('/san-pham/{ten_danh_muc_slug}/{ten_loai_slug}', [TrangChuController::class, 'SanPhamTheLoai']);
Route::get('/san-pham/{ten_danh_muc_slug}/{ten_loai_slug}/{ten_san_pham_slug}', [TrangChuController::class, 'SanPhamChiTiet']);

Route::get('/san-pham-nam', [TrangChuController::class, 'SanPhamNam']);
Route::get('/san-pham-nu', [TrangChuController::class, 'SanPhamNu']);
Route::get('/san-pham-tre-em', [TrangChuController::class, 'SanPhamTreEm']);
Route::get('/gio-hang', [TrangChuController::class, 'GioHang']);
Route::get('/thanh-toan', [TrangChuController::class, 'ThanhToan']);
Route::get('/tin-tuc', [TinTucController::class, 'TinTuc']);
Route::get('/tin-tuc/{id}', [TinTucController::class, 'TinTuc_theoloai']);
Route::get('/tin-tuc-chi-tiet/{id}', [TinTucController::class, 'TinTucChiTiet']);
Route::get('/gioi-thieu', [TrangChuController::class, 'GioiThieu']);
Route::get('/binh-luan-tin-tuc', [BinhluanTintucController::class, 'binhluan_baiviet']);


Route::get('/tim-kiem', [TrangChuController::class, 'TimKiemGet']);
Route::post('/tim-kiem', [TrangChuController::class, 'TimKiemPost']);



