<?php

namespace App\Providers;

use App\Http\ViewComposers\headerAdminComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\ViewComposers\headerComposer;


class HeaderProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('Trang-Khach-Hang.share.footer', headerComposer::class);
        View::composer('Trang-Khach-Hang.share.header', headerComposer::class);
        View::composer('Trang-Khach-Hang.page.TrangChu', headerComposer::class);
        View::composer('AdminRocker.share.header', headerAdminComposer::class); 
        View::composer('AdminRocker.share.menu', headerAdminComposer::class); 
        View::composer('AdminRocker.share.js', headerAdminComposer::class);        

    }
}
