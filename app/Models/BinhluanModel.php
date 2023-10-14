<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhluanModel extends Model
{
    use HasFactory;

    protected $table = 'binh_luan';
    protected $primarykey = 'id';
    protected $fillable = [
        "noi_dung",
        "ma_san_pham",
        "ma_bai_viet",
        "ma_khach_hang",
        "rating",
        "created_at",
        "updated_at",
    ];
}