<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiohangModel extends Model
{
    use HasFactory;

    protected $table = 'gio_hang';
    protected $primarykey = 'id';
    protected $fillable = [
        "ma_san_pham",
        "ma_khach_hang",
        "tong_tien",
        "tong_so_luong",
    ];
}