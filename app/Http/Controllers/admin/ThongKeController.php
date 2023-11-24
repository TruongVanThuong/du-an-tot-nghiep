<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    public function index() {
        return view('AdminRocker.page.ThongKe');
    }
}
