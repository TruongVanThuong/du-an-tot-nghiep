<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhanhModel extends Model
{
    use HasFactory;

    protected $table = 'hinh_anh';
    protected $fillable = [
        "hinh_anh",
        "ma_san_pham",
        "created_at",
        "updated_at",
    ];
}