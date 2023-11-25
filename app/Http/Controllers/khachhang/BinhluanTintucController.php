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
        $data_binhluan_baiviet = binh_luan_bai_viets::orderBy('created_at','desc')->get();
        
        foreach ($data_binhluan_baiviet as $binhluan) {
            $user = KhachHangModel::find($binhluan->ma_khach_hang);
            $binhluan->ma_khach_hang = $user->ho_va_ten;
            
        }

        // return view('AdminRocker.page.BaiViet.index', compact('data_binhluan_baiviet'));
        // return response()->json(['data_binhluan_baiviet',200]);
        return response()->json(array('status'=> 'success','data_binhluan_baiviet'=> $data_binhluan_baiviet),200);
        

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
    
}
