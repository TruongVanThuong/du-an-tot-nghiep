<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $check = Auth::guard('khach_hang')->check();
        if($check) {
            $user = Auth::guard('khach_hang')->user();
            if($user->loai_tai_khoan <= 2) {
                toastr()->error('Tài khoản của bạn không đủ quyền truy cập!');
                return back();
            }
            return $next($request);
        } else {
            toastr()->warning('Chức năng này yêu cầu phải đăng nhập!');
            return back();
        }
    }
}
