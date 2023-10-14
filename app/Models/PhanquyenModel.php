<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhanquyenModel extends Model
{
    use HasFactory;

    protected $table = 'phan_quyen';
    protected $primarykey = 'id';
    protected $fillable = [
        "ten_phan_quyen",
        "role_phan_quyen",
        "created_at",
        "updated_at",
    ];
}