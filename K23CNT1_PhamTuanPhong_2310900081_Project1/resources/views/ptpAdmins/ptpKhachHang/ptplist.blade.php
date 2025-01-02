@extends('_layouts.admins._master')
@section('title', 'Danh sách người dùng')
@section('content-body')
    <div class="container border p-3 bg-white">
        @if (session('message'))
        <div class="alert alert-success" >
            {{ session('message') }}
        </div>
        @endif
        <div class="row mb-3">
            <h1>Danh sách hoá đơn</h1>
        </div>
        <a href="{{route('ptpadmins.ptpkhachhang.ptpcreate')}}"><button class="btn btn-success "><i class="fa-solid fa-plus"></i> Thêm mới</button></a>
        <div class="table-container">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã khách hàng</th>
                        <th>Họ tên khách</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Ngày đăng ký</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ptpKhachHang as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$item->ptpMaKhachHang}}</td>
                            <td>{{$item->ptpHoTenKhachHang}}</td>
                            <td>{{$item->ptpEmail}}</td>
                            <td>{{$item->ptpMatKhau}}</td>
                            <td>{{$item->ptpDienThoai}}</td>
                            <td>{{$item->ptpDiaChi}}</td>
                            <td>{{$item->ptpNgayDangKy}}</td>
                            <td>{{$item->ptpTrangThai==1?"Hiển thị":"Ẩn"}}</td>

                            <td class="text-center">
                                <!-- View Button -->
                                <button class="btn btn-success me-1 rounded-circle" onclick="window.location.href='/ptp-admin/ptp-chi-tiet-san-pham/{{$item->id}}'" title="Xem chi tiết">
                                    <i class="fa-solid fa-circle-info"></i>
                                </button>

                                <!-- Edit Button -->
                                <button class="btn btn-primary me-1 rounded-circle" onclick="window.location.href='/ptp-admin/ptp-chinh-sua-san-pham/{{$item->id}}'" title="Chỉnh sửa">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>

                                <!-- Delete Button -->
                                <form action="{{ route('ptpadmins.ptpsanpham.ptpdelete', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn chắc chắn muốn xoá loại sản phẩm này?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger me-1 rounded-circle" title="Xoá">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

<style>
    .table-container {
            max-height: 400px; /* Giới hạn chiều cao */
            overflow-y: auto; /* Bật thanh cuộn dọc */
            overflow-x: auto; /* Bật thanh cuộn ngang */
            border: 1px solid #ccc; /* Viền bảng */
            padding: 10px;
        }
    .table {
    border-collapse: collapse;
    width: 100%;
    
}

.table th, .table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

.table th {
    background-color: #f2f2f2;
}

.table-bordered {
    border: 1px solid #dee2e6;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
}

.btn-success, .btn-primary, .btn-danger {
    padding: 0.25rem 0.5rem;
    font-size: 0.8rem;
}

.rounded-circle {
    border-radius: 50%;
}
</style>