<?php

namespace App\Http\Controllers\khachhang;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\YeuCauDangKy;
use App\Http\Requests\YeuCauDangNhap;
use App\Jobs\GuiMailTaiKhoang;
use App\Models\KhachHangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KhachHangController extends Controller
{
    public function DangNhap()
    {
        return view('Trang-Khach-Hang.page.DangNhap');
    }
    public function DangKy()
    {
        return view('Trang-Khach-Hang.page.DangKy');
    }

    public function XacThucDangKy(YeuCauDangKy $request)
    {
        $du_lieu = $request->all();
        $hash = Str::uuid(); // tạo ra 1 biến tên hash kiểu string có 36 ký tự không trùng với nhau
        $du_lieu['ma_bam_email'] = $hash;
        $du_lieu['password']  = bcrypt($du_lieu['password']);
        KhachHangModel::create($du_lieu);

        // Phân cụm này qua JOB
        $du_lieu_Mail['ho_va_ten'] = $request->ho_va_ten;
        $du_lieu_Mail['email']     = $request->email;
        $du_lieu_Mail['ma_bam_email'] = $hash;
        GuiMailTaiKhoang::dispatch($du_lieu_Mail);

        // SendMailJob::dispatch($du_lieu_Mail);
        // End Phân JOB
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Đăng Ký thành công'
        ]);
    }

    public function KichHoatTaiKhoang($hash)
    {
        $tai_khoang = KhachHangModel::where('ma_bam_email', $hash)->first();
        if ($tai_khoang && $tai_khoang->loai_tai_khoan == 0) {
            $tai_khoang->loai_tai_khoan = 1;
            $tai_khoang->ma_bam_email = '';
            $tai_khoang->save();
            Toastr()->success('Đã kích hoạt tài khoản thành công!');
        } else {
            toastr()->error('Thông tin không chính xác!');
        }
        return redirect('/dang-nhap');
    }

    public function XacThucDangNhap(YeuCauDangNhap $request)
    {
        $du_lieu['email']      = $request->email;
        $du_lieu['password']   = $request->password;

        $kiem_tra = Auth::guard('khach_hang')->attempt($du_lieu);

        if ($kiem_tra) {
            $khach_hang = Auth::guard('khach_hang')->user();
            if ($khach_hang->loai_tai_khoan == -1) {
                Auth::guard('khach_hang')->logout();
                return response()->json([
                    'status' => false,
                    'message' => 'Tài khoản đã bị khóa',
                ]);
            } else if ($khach_hang->loai_tai_khoan == 0) {
                Auth::guard('khach_hang')->logout();
                return response()->json([
                    'status' => false,
                    'message' => 'Tài khoản chưa được kích hoạt, hãy vào Gmail kích hoạt',
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản hoặc mật khẩu không đúng',
            ]);
        }
    }
}