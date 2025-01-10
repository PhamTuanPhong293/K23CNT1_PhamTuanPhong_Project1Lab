<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PTP_QUAN_TRI extends Model
{
    use HasFactory;

    protected $table = "PTP_QUAN_TRI";

    protected $fillable = [
        'ptpTaiKhoan',
        'ptpMatKhau',
        'ptpTrangThai',
    ];

    protected $hidden = [
        'ptpMatKhau',
    ];

    public function getAuthPassword()
    {
        return $this->ptpMatKhau;
    }
}
