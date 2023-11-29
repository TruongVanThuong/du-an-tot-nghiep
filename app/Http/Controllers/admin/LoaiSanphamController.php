<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\LoaisanphamModel;
use App\Models\DanhmucModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\LoaisanphamRequest;

class LoaiSanphamController extends Controller
{
    public function index()
    {
        return view('AdminRocker.page.TheLoai.QuanLyTheLoai');
    }

    public function HienThiTheLoai() {
        $data_theloai = LoaisanphamModel::get();
        $data_danhmuc = DanhmucModel::get();
        $TrashTheLoai = LoaisanphamModel::onlyTrashed()->get();

        $compact = compact('data_danhmuc', 'data_theloai', 'TrashTheLoai');

        if ($data_theloai->isEmpty()) {
			return response()->json( $compact );
        } else {
            return response()->json( $compact );
        }
    }

    public function ThemTheLoai(LoaisanphamRequest $request) {
        $data =  $request->all();
        $data['ten_loai_slug'] = Str::slug($data['ten_loai']);
        LoaisanphamModel::create($data);
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Thêm thể loại thành công'
        ]);
        
    }

    public function XoaTheLoai(Request $request) {
        
		$xoa = LoaisanphamModel::find($request->id);
		$xoa->delete();

        return response()->json([
            'status'    =>      true,
            'message'   =>      'Đã xóa thể loại thành công !'
        ]);
    }

    public function CapNhatTheLoai(Request $request) {
        $data = $request->all();
        $data['ten_loai_slug'] = Str::slug($data['ten_loai']);

        $TheLoai = LoaisanphamModel::where('id', $request->id)->first();
        $TheLoai->update($data);

        return response()->json([
            'status'    =>  true,
            'message'   =>  'Cap nhật thể loại thành công'
        ]);       
    }


    // ===================================================================================
    // =============================== TRASH =============================================
    // ===================================================================================




    public function PhucHoiTheLoai(Request $request) {
         
        $PhucHoi = LoaisanphamModel::withTrashed()->where('id', $request->id);
		$PhucHoi->restore();  
        return response()->json([
            'status'    =>      true,
            'message'   =>      'Phục hồi thể loại thành công !!'
        ]);
        
    }// Phuc hoi

    public function XoaTheLoaiVinhVien(Request $request) {
         
        $XoaCung = LoaisanphamModel::withTrashed()->where('id', $request->id);
		$XoaCung->forceDelete();  
        return response()->json([
            'status'    =>      true,
            'message'   =>      'Đã xóa thể loại thành công !'
        ]);
        
    }// Xoa cung


}