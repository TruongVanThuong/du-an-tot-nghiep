<?php

namespace App\Http\Controllers\khachhang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\binh_luan_bai_viets;
use App\Models\BinhLuanSanPham;
use App\Models\KhachHangModel;
use Illuminate\Support\Facades\Auth;

class BinhluanTintucController extends Controller
{
    //
    public function binhluan_baiviet()
    {
        $data_binhluan_baiviet = binh_luan_bai_viets::orderBy('created_at', 'desc')
        ->join('khach_hangs', 'binh_luan_bai_viet.ma_khach_hang', '=', 'khach_hangs.id')
        
        ->select('binh_luan_bai_viet.*', 'khach_hangs.ho_va_ten')
        ->get();
        $compact =compact('data_binhluan_baiviet');
       
        return response()->json($compact);

    }
    public function them_binhluan(Request $request)
    {
        $check =Auth::guard('khach_hang')->check();
        if($check){
            $khach_hang = Auth::guard('khach_hang')->user();
            $data_form =  $request->all();
            $data_form['ma_khach_hang']  = $khach_hang->id;
            $data_form['hien_thi']  = 1;
            $data_form['rating']  = 1;
            binh_luan_bai_viets::create($data_form);
            return response()->json([
                'status'    =>  true,
                'message'   =>  'Thêm thành công'
            ]);
        }else{
            return response()->json([
                'status'    =>  false,
                'message'   =>  'Cần phải đăng nhập để bình luận'
            ]);
        }
        
    }
    
    
        //     public function index()
        // {
        //     return view('AdminRocker.page.SanPham.index');
        // }

        // public function store(Request $request)
        // {
        //     $data =  $request->all();
        //     Sanpham::create($data);
        //     return response()->json([
        //         'status'    =>  true,
        //         'message'   =>  'Thêm thành công'
        //     ]);
        // }
        // public function getData(){
        //     $data = Sanpham::get();
        //     return response()->json([
        //         'list'  => $data
        //     ]);
        // }

        // public function update(Request $request){
        //     $sanpham = Sanpham::where('id', $request->id)->first();
        //     if($sanpham){
        //         $sanpham->update($request->all());
        //     }
        //     return response()->json([
        //         'status' => true,
        //         'message'  => "Cập nhập sản phẩm  thành công!",
        //     ]);
        // }

        // public function destroy(Request $request){
        //     $sanpham = Sanpham::where('id', $request->id)->first();
        //     if($sanpham){
        //         $sanpham->delete();
        //     }
        //     return response()->json([
        //         'status'    => true,
        //         'message'  => "Xóa sản phẩm thành công!",
        //     ]);
        // }

        // public function changeStatus($id){
        //     $sanpham = Sanpham::where('id', $id)->first();
        //     if ($sanpham) {
        //         $sanpham->tinh_trang =! $sanpham->tinh_trang;
        //         $sanpham->save();
        //     }
        // }
}
