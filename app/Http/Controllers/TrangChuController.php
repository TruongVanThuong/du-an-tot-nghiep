<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    public function TrangChu(){
        return view('Trang-Khach-Hang.page.TrangChu');
    }
}
