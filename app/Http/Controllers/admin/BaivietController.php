<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BaivietRequest;
use Illuminate\Http\Request;
use App\Models\BaivietModel;
use App\Models\KhachHangModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class BaivietController extends Controller
{
    public function baiviet(Request $request)
    {
        $data_baiviet = BaivietModel::orderBy('created_at','desc')->paginate(2);

        foreach ($data_baiviet as $baiviet) {
            $user = KhachHangModel::find($baiviet->ma_khach_hang);
            $baiviet->ma_khach_hang = $user->ho_va_ten;
            $baiviet->mo_ta_ngan = substr($baiviet->mo_ta_ngan, 0, 30);
            $baiviet->ten_bai_viet = substr($baiviet->ten_bai_viet, 0, 30);
        }

        return view('AdminRocker.page.BaiViet.index', compact('data_baiviet'));
        //    var_dump($data_baiviet);
    }
    public function taobaiviet(Request $request)
    {

        $khach_hang = Auth::guard('khach_hang')->user();
        $data_form = $request->all();
        $data_form['ten_bai_viet_slug'] = Str::slug($data_form['ten_bai_viet']);
        $data_form['ma_khach_hang']  = $khach_hang->id;

        $get_image = $request->file('hinh_anh');
        $get_name_image = $get_image->getClientOriginalName();
        $images = Image::make($get_image->getRealPath());
       
        $images->save(public_path('img/' . $get_name_image));

        $data_form['hinh_anh']  = $get_name_image;
        BaivietModel::create($data_form);
        toastr()->success('Tạo bài viết Thành Công');
        return redirect('admin/baiviet');
        // var_dump($data_form);
        
    }
    public function xoa_baiviet($id)
	{
		$xoa_baiviet = BaivietModel::find($id);
		if ($xoa_baiviet == null)
			return '<script type ="text/JavaScript">alert("loi roi!");</script>';
		$xoa_baiviet->delete();
        toastr()->success('Xoá bài viết Thành Công');
        return redirect('admin/baiviet');
        
	}

    public function capnhat_baiviet(Request $request, $id)
    {
        $capnhat = BaivietModel::find($id);
        
        // var_dump($capnhat);
        $data_capnhat= $request->all();
        $data_capnhat['ten_bai_viet_slug'] = Str::slug($data_capnhat['ten_bai_viet']);

        $capnhat->ten_bai_viet=$data_capnhat['ten_bai_viet'];
        $capnhat->ten_bai_viet_slug=$data_capnhat['ten_bai_viet_slug'];
        $capnhat->mo_ta_ngan=$data_capnhat['mo_ta_ngan'];
        $capnhat->noi_dung=$data_capnhat['noi_dung'];

        $get_image = $request->file('hinh_anh');
        $get_name_image = $get_image->getClientOriginalName();
        $images = Image::make($get_image->getRealPath());
        $images->save(public_path('img/' . $get_name_image));

        $capnhat->hinh_anh=$get_name_image;

        $capnhat->save();

        toastr()->success('cập nhật bài viết Thành Công');
        
        return redirect('admin/baiviet');
		
    }
}
