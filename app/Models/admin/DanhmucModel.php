<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhmucModel extends Model
{
    use HasFactory;

    protected $table = 'danh_muc';
    protected $fillable = [
        "ten_danh_muc",
        "ten_danh_muc_slug",
    ];
}