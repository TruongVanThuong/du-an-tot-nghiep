<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaGiamGiaModel;
use App\Http\Requests\MaGiamGiaRequest;
class MaGiamGiaController extends Controller
{
    public function index()
    {
        return view('AdminRocker.page.MaGiamGia.MaGiamGia');
    }
    public function lay_ma_giam_gia()
    {
        $data_ma_giam_gia = MaGiamGiaModel::orderBy('created_at', 'desc')
            ->get();
        $compact = compact('data_ma_giam_gia');
        return response()->json($compact);
    }
    public function them_ma_giam_gia(MaGiamGiaRequest $request)
    {
        $data_form =  $request->all();
        MaGiamGiaModel::create($data_form);
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Thêm mã giảm giá thành công'
        ]);
    }

    public function cap_nhat_ma_giam_gia(Request $request)
    {
        $data_ma_giam_gia = MaGiamGiaModel::find($request->id);
        $data_form =  $request->all();
        
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Thêm mã giảm giá thành công'
        ]);
    }
}
