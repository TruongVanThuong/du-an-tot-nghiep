<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LienheModel extends Model
{
    use HasFactory;

    protected $table = 'lien_he';
    protected $primarykey = 'id';
    protected $fillable = [
        "noi_dung",
        "ten_khach_hang",
        "so_dien_thoai",
        "email",
        "created_at",
        "updated_at",
    ];
}