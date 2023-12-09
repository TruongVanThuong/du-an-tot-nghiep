<?php
// Trong thư mục app/Http/ViewComposers
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\DanhmucModel;
use App\Models\LoaisanphamModel;
use App\Models\KhachHangModel;
use Illuminate\Support\Facades\Auth;



class headerComposer
{
    public function compose(View $view)
    {
        // Truyền dữ liệu vào view
        $danhMuc = DanhmucModel::all();
        $theLoai = LoaisanphamModel::all();

        // Lấy thông tin về người dùng hiện tại đã đăng nhập
        $loggedInUser = Auth::guard('tai_khoan')->user();

        // dd($loggedInUser->loai_tai_khoan);

        // Kiểm tra nếu người dùng có đăng nhập và có id là 1
        if ($loggedInUser && $loggedInUser->loai_tai_khoan == 2) {
            // Thực hiện các hành động phù hợp nếu người dùng có id là 1
            $isAdmin = true; // Ví dụ: gán biến $isAdmin = true;
        } else {
            $isAdmin = false; // Ví dụ: gán biến $isAdmin = false;
        }        
        
        $view->with('danhMuc', $danhMuc);
        $view->with('theLoai', $theLoai);
        $view->with('isAdmin', $isAdmin);
       
    }
}