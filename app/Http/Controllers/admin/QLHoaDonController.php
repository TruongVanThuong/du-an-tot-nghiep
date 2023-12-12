<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HoadonchitietModel;
use App\Models\HoadonModel;
use App\Models\KhachHangModel;
use App\Models\SanphamModel;
use Illuminate\Http\Request;

class QLHoaDonController extends Controller {
    //
    public function index() {
        return view('AdminRocker.page.HoaDon.QuanLyHoaDon');
    }

    public function DuLieuHoaDon() {
        $data_hoadon = HoadonModel::all();
        $data_khachhang = KhachHangModel::all();
        $data_hdct = HoadonchitietModel::join('san_pham', 'hoa_don_chi_tiet.ma_san_pham', '=', 'san_pham.id')
            ->join('hinh_anh', function ($join) {
                $join->on('san_pham.id', '=', 'hinh_anh.ma_san_pham')
                    ->whereRaw('hinh_anh.id = (select min(id) from hinh_anh where hinh_anh.ma_san_pham = san_pham.id)');
            })
            ->select(
                'hoa_don_chi_tiet.id',
                'hoa_don_chi_tiet.ma_hoa_don',
                'hoa_don_chi_tiet.ma_san_pham',
                'hoa_don_chi_tiet.tong_so_luong',
                'san_pham.ten_san_pham',
                'san_pham.gia_san_pham',
                'hinh_anh.hinh_anh',
            )
            ->get();

        $data_sanpham = SanphamModel::join('hinh_anh', function ($join) {
            $join->on('san_pham.id', '=', 'hinh_anh.ma_san_pham')
                ->whereRaw('hinh_anh.id = (select min(id) from hinh_anh where hinh_anh.ma_san_pham = san_pham.id)');
        })
            ->join('loai_san_pham', 'san_pham.ma_loai', '=', 'loai_san_pham.id')
            ->join('danh_muc', 'loai_san_pham.ma_danh_muc', '=', 'danh_muc.id')
            ->select('san_pham.*', 'loai_san_pham.ten_loai', 'danh_muc.ten_danh_muc', 'hinh_anh.hinh_anh')
            ->get();

        $compact = compact('data_hoadon', 'data_khachhang', 'data_hdct', 'data_sanpham');

        return response()->json($compact);
    }

    public function HoaDonChiTiet($id) {
        $data_hoadon = HoadonModel::where('id', $id)->first();
        // dd($data_hoadon);
        $data_hdct = HoadonchitietModel::where('ma_hoa_don', $id)
            ->join('san_pham', 'hoa_don_chi_tiet.ma_san_pham', '=', 'san_pham.id')
            ->join('hinh_anh', function ($join) {
                $join->on('san_pham.id', '=', 'hinh_anh.ma_san_pham')
                    ->whereRaw('hinh_anh.id = (select min(id) from hinh_anh where hinh_anh.ma_san_pham = san_pham.id)');
            })
            ->select(
                'hoa_don_chi_tiet.id',
                'hoa_don_chi_tiet.ma_hoa_don',
                'hoa_don_chi_tiet.ma_san_pham',
                'hoa_don_chi_tiet.tong_so_luong',
                'san_pham.ten_san_pham',
                'san_pham.gia_san_pham',
                'hinh_anh.hinh_anh',
            )
            ->get();

        $data_sanpham = SanphamModel::join('hinh_anh', function ($join) {
            $join->on('san_pham.id', '=', 'hinh_anh.ma_san_pham')
                ->whereRaw('hinh_anh.id = (select min(id) from hinh_anh where hinh_anh.ma_san_pham = san_pham.id)');
        })
            ->join('loai_san_pham', 'san_pham.ma_loai', '=', 'loai_san_pham.id')
            ->join('danh_muc', 'loai_san_pham.ma_danh_muc', '=', 'danh_muc.id')
            ->select('san_pham.*', 'loai_san_pham.ten_loai', 'danh_muc.ten_danh_muc', 'hinh_anh.hinh_anh')
            ->get();

        return view('AdminRocker.page.HoaDon.QuanLyHDCT', compact('data_hdct', 'data_hoadon', 'data_sanpham'));
    }

    public function ThemHoaDon() {
        $data_sanpham = SanphamModel::join('hinh_anh', function ($join) {
            $join->on('san_pham.id', '=', 'hinh_anh.ma_san_pham')
                ->whereRaw('hinh_anh.id = (select min(id) from hinh_anh where hinh_anh.ma_san_pham = san_pham.id)');
        })
            ->join('loai_san_pham', 'san_pham.ma_loai', '=', 'loai_san_pham.id')
            ->join('danh_muc', 'loai_san_pham.ma_danh_muc', '=', 'danh_muc.id')
            ->select('san_pham.*', 'loai_san_pham.ten_loai', 'danh_muc.ten_danh_muc', 'hinh_anh.hinh_anh')
            ->get();
        return view('AdminRocker.page.HoaDon.TaoHoaDon', compact('data_sanpham'));
    }


    public function ThemHoaDonChiTiet(Request $request) {
        $data = $request->all();
        $tong_tien = $data['tong_so_luong'] * $data['gia_san_pham'];
        $data['tong_tien'] = $tong_tien;
        $tong_tien_tat_ca = $data['tong_tien_tat_ca'] + $tong_tien;
        // dd($data);
        HoadonchitietModel::create($data);
        HoadonModel::where('id', $request->ma_hoa_don)->update(
            [
                'tong_tien_tat_ca' => $tong_tien_tat_ca
            ]
        );
        toastr()->success('Sản phẩm đã được thêm thành công.');
        return redirect("admin/hoa-don/hoa-don-chi-tiet/{$request->ma_hoa_don}");
    }

    public function XoaHoaDonChiTiet() {
        $id = $_GET['idsp'];
        $hoadonchitiet = HoadonchitietModel::find($id);
        $data_sanpham = SanphamModel::where('id', $hoadonchitiet->ma_san_pham)->first();
        $data_hoadon = HoadonModel::where('id', $hoadonchitiet->ma_hoa_don)->first();
        $gia_sanpham = $data_sanpham->gia_san_pham;
        $tong_tien = $gia_sanpham * $hoadonchitiet->tong_so_luong;
        $tong_tien_tat_ca = $data_hoadon->tong_tien_tat_ca - $tong_tien;

        HoadonModel::where('id', $hoadonchitiet->ma_hoa_don)->update(
            [
                'tong_tien_tat_ca' => $tong_tien_tat_ca,
            ]
        );
        $hoadonchitiet->delete();
    }
}
