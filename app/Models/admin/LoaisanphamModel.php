<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaisanphamModel extends Model
{
    use HasFactory;

    protected $table = 'loai_san_pham';
    protected $primarykey = 'id';
    protected $dates = ['created_at'];
    protected $fillable = [
        "ten_loai",
        "ten_loai_slug",
        "ma_danh_muc",
        "created_at",
        "updated_at",
    ];
}