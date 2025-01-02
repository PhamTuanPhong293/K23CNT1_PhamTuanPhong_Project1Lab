<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PTP_HOA_DON extends Model
{
    use HasFactory;
    protected $table = 'PTP_HOA_DON';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['id', 'ten_khach_hang', 'tong_tien', 'ngay_tao', 'trang_thai'];
}
