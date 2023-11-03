<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binh_luan_bai_viets extends Model
{
    use HasFactory;
    protected $table = 'binh_luan_bai_viet';
    protected $primarykey = 'id';
    protected $fillable = [
        "noi_dung",
        "ma_bai_viet",
        "ma_khach_hang",
        "rating",
        "created_at",
        "updated_at",
    ];
}
