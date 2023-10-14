<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerModel extends Model
{
    use HasFactory;

    protected $table = 'banner';
    protected $primarykey = 'id';
    protected $fillable = [
        "ten_anh_banner",
        "link_anh_banner",
        "created_at",
        "updated_at",
    ];
}