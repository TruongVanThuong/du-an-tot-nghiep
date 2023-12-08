<?php
// Trong thư mục app/Http/ViewComposers
namespace App\Http\ViewComposers;

use App\Models\LienheModel;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;



class headerAdminComposer
{
    public function compose(View $view)
    {

        $LIENHE = LienheModel::where('xu_ly', 0)->get();
        $LIENHE_xu_ly = LienheModel::where('xu_ly', 0)->count();


        // // Lấy thông tin về người dùng hiện tại đã đăng nhập
        // $loggedInUser = Auth::guard('tai_khoan')->user();

        // // dd($loggedInUser->loai_tai_khoan);

        // // Kiểm tra nếu người dùng có đăng nhập và có id là 1
        // if ($loggedInUser && $loggedInUser->loai_tai_khoan == 2) {
        //     // Thực hiện các hành động phù hợp nếu người dùng có id là 1
        //     $isAdmin = true; // Ví dụ: gán biến $isAdmin = true;
        // } else {
        //     $isAdmin = false; // Ví dụ: gán biến $isAdmin = false;
        // }


        // $view->with('isAdmin', $isAdmin);
        $view->with('LIENHE', $LIENHE);
        $view->with('LIENHE_xu_ly', $LIENHE_xu_ly);
    }
}