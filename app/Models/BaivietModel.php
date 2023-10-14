<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaivietModel extends Model
{
    use HasFactory;

    protected $table = 'bai_viet';
    protected $primarykey = 'id';
    protected $fillable = [
        "ma_khach_hang",
        "noi_dung",
        "hinh_anh",
        "rating",
        "created_at",
        "updated_at",
    ];
}