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

    //sanpham --------------
    Route::get('/sanpham', [SanphamController::class, 'sanpham']);
    Route::post('/sanpham', [SanphamController::class, 'them_sanpham']);
    Route::get('/xoasanpham', [SanphamController::class, 'xoa_sanpham']);
    Route::post('/capnhatsanpham/{id}', [SanphamController::class, 'cn_sanpham_']);
    Route::get('/toggleStatus', [SanphamController::class, 'toggleStatus']);
    // trash
    Route::get('/sanpham/phuc-hoi', [SanphamController::class,'PhucHoiSanPham']); 
    Route::get('/sanpham/phuc-hoi-all', [SanphamController::class,'PhucHoiTatCaSanPham']); 
    Route::get('/sanpham/xoa-cung', [SanphamController::class,'XoaSanPhamVinhVien']); 

    // Hình Ảnh --------------
    Route::get('/xoahinhanh', [hinhanhController::class, 'xoa_hinhanh']);

    //danhmuc --------------
    Route::group(['prefix' => '/danhmuc'], function () {
      Route::get('/', [DanhmucController::class,'index']); 
      Route::get('/du-lieu', [DanhmucController::class,'HienThiDanhMuc']); // url/admin/danh-muc/du-lieu
      Route::post('/', [DanhmucController::class,'ThemDanhMuc']); 
      Route::post('/xoa', [DanhmucController::class,'XoaDanhMuc']); 
      Route::post('/cap-nhat', [DanhmucController::class,'CapNhatDanhMuc']); 

      // trash
      
      Route::post('/phuc-hoi', [DanhmucController::class,'PhucHoiDanhMuc']); 
      Route::post('/phuc-hoi-all', [DanhmucController::class,'PhucHoiTatCaDanhMuc']); 
      Route::post('/xoa-cung', [DanhmucController::class,'XoaDanhMucVinhVien']); 
    });

    //the loai --------------
    Route::group(['prefix' => '/theloai'], function () {
      Route::get('/', [LoaiSanphamController::class,'index']); 
      Route::get('/du-lieu', [LoaiSanphamController::class,'HienThiTheLoai']); // url/admin/the-loa/du-lieu
      Route::post('/', [LoaiSanphamController::class,'ThemTheLoai']); 
      Route::post('/xoa', [LoaiSanphamController::class,'XoaTheLoai']); 
      Route::post('/cap-nhat', [LoaiSanphamController::class,'CapNhatTheLoai']); 

      // trash
      
      Route::post('/phuc-hoi', [LoaiSanphamController::class,'PhucHoiTheLoai']); 
      Route::post('/phuc-hoi-all', [LoaiSanphamController::class,'PhucHoiTatCaTheLoai']); 
      Route::post('/xoa-cung', [LoaiSanphamController::class,'XoaTheLoaiVinhVien']);
    });

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