<?php
// Trong thư mục app/Http/ViewComposers
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\DanhmucModel;
use App\Models\LoaisanphamModel;

class headerComposer
{
    public function compose(View $view)
    {
        // Truyền dữ liệu vào view
        $danhMuc = DanhmucModel::all();
        $theLoai = LoaisanphamModel::all();
        $view->with('danhMuc', $danhMuc);
        $view->with('theLoai', $theLoai);
        // return $view->with('Trang-Khach-Hang.share.header', compact('danhMuc','theLoai'));
    }
}