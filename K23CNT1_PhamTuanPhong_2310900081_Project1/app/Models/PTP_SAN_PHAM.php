<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PTP_SAN_PHAM extends Model
{
    use HasFactory;

    // Khai báo bảng liên kết với model
    protected $table = "PTP_SAN_PHAM";
    

    // Tắt timestamps nếu bảng không có các cột created_at và updated_at

    // Khai báo các cột có thể thêm hoặc chỉnh sửa
    
    // Định nghĩa mối quan hệ với bảng PTP_LOAI_SAN_PHAM


}
