<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanphamModel extends Model
{
    use HasFactory;

    protected $table = 'san_pham';
    protected $primarykey = 'id';
    protected $dates = ['created_at'];
    protected $fillable = [
        "ten_san_pham",
        "ten_san_pham_slug",
        "gia_san_pham",
        "giam_gia_san_pham",
        "ma_loai",
        "so_luong",
        "luot_xem",
        "dat_biet",
        "mo_ta",
        "created_at",
        "updated_at",
    ];
}