<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHangModel extends Model
{
    use HasFactory;

    protected $table = 'khach_hangs';

    protected $fillable = [
        'ho_va_ten',
        'email',
        'mat_khau',
        'so_dien_thoai',
        'dia_chi',
        'ma_bam_email',
        'ngay_sinh',
        'gioi_tinh',
        'loai_tai_khoan'
    ];
}
