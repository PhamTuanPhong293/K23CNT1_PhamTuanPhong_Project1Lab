@extends('_layouts.admins._master')
@section('title', 'Danh sách khách hàng')

@section('content-body')
    <h1>Danh sách khách hàng</h1>
    <a href="{{ route('ptpadmins.ptpkhachhang.ptpcreate') }}" class="btn btn-primary">Thêm mới</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ptpKhachHang as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->ptpMaKhachHang }}</td>
                    <td>{{ $item->ptpTenKhachHang }}</td>
                    <td>{{ $item->ptpDiaChi }}</td>
                    <td>{{ $item->ptpSoDien_Thoai }}</td>
                    <td>{{ $item->ptpEmail }}</td>
                    <td>{{ $item->ptpGioi_Tinh ? 'Nam' : 'Nữ' }}</td>
                    <td>{{ $item->ptpNgay_Sinh }}</td>
                    <td>{{ $item->ptpTrangThai ? 'Kích hoạt' : 'Không kích hoạt' }}</td>
                    <td>
                        <a href="{{ route('ptpadmins.ptpkhachhang.ptpedit', $item->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('ptpadmins.ptpkhachhang.ptpdetail', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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