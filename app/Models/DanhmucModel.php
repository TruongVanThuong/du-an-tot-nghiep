<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LoaisanphamModel;


class DanhmucModel extends Model
{
    use HasFactory;

    protected $table = 'danh_muc';
    protected $fillable = [
        "ten_danh_muc",
        "ten_danh_muc_slug",
    ];

    public function LoaisanphamModel()
    {
        return $this->hasMany(LoaisanphamModel::class, 'ma_danh_muc', 'id');
    }
}