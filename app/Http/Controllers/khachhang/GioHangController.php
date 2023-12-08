<?php

namespace App\Http\Controllers\khachhang;

use App\Http\Controllers\Controller;
use App\Models\GiohangModel;
use App\Models\MaGiamGiaModel;
use App\Models\SanphamModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GioHangController extends Controller
{
    public function ThemSoLuong($id)
    {
        $sanpham = SanphamModel::where('id', $id)->first();

        if ($sanpham) {
            $user = Auth::guard('khach_hang')->user();
            $ma_khach_hang = $user->id;
            $existingCartItem = GiohangModel::where('ma_khach_hang', $ma_khach_hang)
                ->where('ma_san_pham', $id)
                ->first();
            if ($existingCartItem) {
                // Cập nhật số lượng nếu sản phẩm đã có trong giỏ hàng
                $existingCartItem->tong_so_luong += 1;
                $existingCartItem->tong_tien = $sanpham->gia_san_pham * $existingCartItem->tong_so_luong;
                $existingCartItem->save();
            } else {
                // Thêm sản phẩm mới vào giỏ hàng nếu chưa tồn tại
                GiohangModel::create([
                    'ma_khach_hang' => $ma_khach_hang,
                    'ma_san_pham' => $id,
                    'tong_so_luong' => 1,
                    'tong_tien' => $sanpham->gia_san_pham,
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'thêm giỏ hàng thành công !!',
            ]);
        }
    }


    public function TruSoLuong($id) {

        $sanpham = SanphamModel::where('id', $id)->first();

        if ($sanpham) {
            $user = Auth::guard('khach_hang')->user();
            $ma_khach_hang = $user->id;
            $existingCartItem = GiohangModel::where('ma_khach_hang', $ma_khach_hang)
                ->where('ma_san_pham', $id)
                ->first();
            if ($existingCartItem) {
                // Giảm số lượng nếu sản phẩm đã có trong giỏ hàng
                $existingCartItem->tong_so_luong -= 1;
                if ($existingCartItem->tong_so_luong <= 0) {
                    // Xóa sản phẩm nếu số lượng giảm xuống 0 hoặc âm
                    $existingCartItem->delete();
                    return response()->json([
                        'status' => true,
                        'message' => 'Xóa sản phẩm khỏi giỏ hàng !!',
                    ]);
                } else {
                    // Cập nhật tổng tiền nếu số lượng còn lại
                    $existingCartItem->tong_tien = $sanpham->gia_san_pham * $existingCartItem->tong_so_luong;
                    $existingCartItem->save();
                    return response()->json([
                        'status' => true,
                        'message' => 'Giảm số lượng thành công !!',
                    ]);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Sản phẩm không tồn tại trong giỏ hàng !!',
                ]);
            }
        }
    }

    public function HienThiDsGioHang()
    {
        $khach_hang = Auth::guard('khach_hang')->user();
        $ma_khach_hang = $khach_hang->id;

        $gio_hang = GiohangModel::where('ma_khach_hang', $ma_khach_hang)
            ->join('san_pham', 'gio_hang.ma_san_pham', '=', 'san_pham.id')
            ->join('hinh_anh', function ($join) {
                $join->on('san_pham.id', '=', 'hinh_anh.ma_san_pham')
                    ->whereRaw('hinh_anh.id = (select min(id) from hinh_anh where hinh_anh.ma_san_pham = san_pham.id)');
            })
            ->select('hinh_anh.hinh_anh', 'san_pham.ten_san_pham', 'san_pham.id','san_pham.gia_san_pham', 'gio_hang.tong_tien', 'gio_hang.tong_so_luong', 'gio_hang.ma_san_pham')
            ->get();

        $tinh_tong_tong_tien = $gio_hang->sum('tong_tien');

        // Đếm tổng số lượng sản phẩm
        $tong_so_luong_san_pham = $gio_hang->sum('tong_so_luong');
        return response()->json([
            'status'         => true,
            'gio_hang'       => $gio_hang,
            'tong_tien_tat_ca'      => $tinh_tong_tong_tien,
            'tong_so_luong'  => $tong_so_luong_san_pham,
        ]);
    }

    public function XoaSanPhamGioHang($id) {
        $sanpham = SanphamModel::where('id', $id)->first();
    
        if ($sanpham) {
            $user = Auth::guard('khach_hang')->user();
            $ma_khach_hang = $user->id;
            $existingCartItem = GiohangModel::where('ma_khach_hang', $ma_khach_hang)
                ->where('ma_san_pham', $id)
                ->first();
    
            if ($existingCartItem) {
                // Xóa sản phẩm khỏi giỏ hàng
                $existingCartItem->delete();
    
                return response()->json([
                    'status'  => true,
                    'message' => 'Xóa sản phẩm khỏi giỏ hàng thành công !!',
                ]);
            } else {
                return response()->json([
                    'status'  => false,
                    'message' => 'Sản phẩm không tồn tại trong giỏ hàng !!',
                ]);
            }
        }
    }

    public function MaGiamGia($ma_giam_gia)
    {
        $du_lieu = MaGiamGiaModel::where('ma_giam_gia', $ma_giam_gia)->first();
        if ($du_lieu && isset($du_lieu->tien_giam_gia)) {
            // Nếu mã tồn tại và chưa được sử dụng
            $tien_giam_gia = $du_lieu->tien_giam_gia;
            // Trả về số tiền giảm giá cho client trước khi xóa dữ liệu
            $response = [
                'tien_giam_gia' => $tien_giam_gia,
                'status'        => true,
                'message'       => 'Sử dụng mã thành công'
            ];
            // Xóa dữ liệu sau khi đã trả về response
            $du_lieu->delete();
    
            return response()->json($response);
        }
    }
    
    
}
