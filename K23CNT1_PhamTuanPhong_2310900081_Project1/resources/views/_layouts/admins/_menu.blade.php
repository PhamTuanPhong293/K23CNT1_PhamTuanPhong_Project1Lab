<ul class="list-group">
    <img src="{{ asset('images/hoctap.jpg') }}" alt="Ảnh">
    <li class="list-group-item active" aria-current="true">Quản trị nội dung</li>
    <li class="list-group-item">
        <a href="/ptp-admins/ptp-admin">Danh sách quản trị</a>
    </li>
    <li class="list-group-item">
        <a href="/ptp-admins/ptp-loai-san-pham">Loại sản Phẩm</a>
    </li>
    <li class="list-group-item">
        <a href="/ptp-admins/ptp-san-pham">Sản Phẩm</a>
    </li>
    <li class="list-group-item">
        <a href="/ptp-admins/ptp-khack-hang">Khách Hàng</a>
    </li>
    <li class="list-group-item">
        <a href="/ptp-admins/ptp-hoa-don">Hóa Đơn</a>
    </li>
    <li class="list-group-item">
        <a href="/ptp-admins/ptp-ct-hoa-don">CT Hóa Đơn</a>
    </li>
    <li class="list-group-item">
        <a href="#">ĐĂNG XUẤT</a>
    </li>
  </ul>
  <style>
    /* Kiểu cho danh sách */
.list-group {
    list-style-type: none; /* Loại bỏ dấu chấm trong danh sách */
    padding: 0;
    margin: 0;
}

.list-group img {
    width: 100%; /* Đặt chiều rộng hình ảnh tự động theo chiều rộng của container */
    border-radius: 10px; /* Bo góc cho hình ảnh (tuỳ chọn) */
    margin-bottom: 20px; /* Thêm khoảng cách dưới hình ảnh */
}

/* Kiểu cho từng mục trong danh sách */
.list-group-item {
    padding: 15px;
    font-size: 16px;
    border: 1px solid #ddd; /* Đặt viền xung quanh mục */
    background-color: #fff; /* Màu nền trắng cho mục */
    color: #333; /* Màu chữ tối */
    transition: background-color 0.3s ease; /* Hiệu ứng chuyển màu nền khi hover */
}

/* Hiệu ứng khi hover vào mục trong danh sách */
.list-group-item:hover {
    background-color: #f1f1f1; /* Màu nền thay đổi khi hover */
}

/* Kiểu cho mục đang được chọn (active) */
.list-group-item.active {
    background-color: #007bff; /* Nền màu xanh dương cho mục active */
    color: #fff; /* Màu chữ trắng cho mục active */
    font-weight: bold; /* Đậm chữ cho mục active */
}

/* Kiểu cho liên kết bên trong mục trong danh sách */
.list-group-item a {
    color: inherit; /* Màu của liên kết sẽ giống màu của mục */
    text-decoration: none; /* Loại bỏ gạch dưới của liên kết */
    display: block; /* Đảm bảo liên kết chiếm toàn bộ chiều rộng của mục */
}

/* Hiệu ứng khi hover vào liên kết */
.list-group-item a:hover {
    text-decoration: underline; /* Gạch dưới khi hover vào liên kết */
}

/* Thêm khoảng cách giữa các mục trong danh sách */
.list-group-item:not(:last-child) {
    margin-bottom: 10px; /* Khoảng cách giữa các mục */
}

  </style>