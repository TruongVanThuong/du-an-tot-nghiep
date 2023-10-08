<?php

use App\Http\Controllers\admin\DanhmucController;
use App\Http\Controllers\admin\hinhanhController;
use App\Http\Controllers\admin\LoaiSanphamController;
use App\Http\Controllers\admin\SanphamController;
use App\Http\Controllers\TrangChuController;
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

Route::group(['namespace' => 'admin','prefix' => 'admin','name' => 'AdminRocker.'], function () {
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