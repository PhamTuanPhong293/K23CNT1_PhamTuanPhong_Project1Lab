@extends('_layouts.admins._master')
@section('title','Danh sách loại sản phẩm')

@section('content-body')
<div class="container border p-3 bg-white">
    <div class="row">
        <div class="col-12">
            <div class="d-flex w-100 justify-content-between">
                <h3>Danh sách loại sản phẩm</h3>
                <a href="{{route('ptpadmins.ptploaisanpham.ptpcreate')}}" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
    </div>

    <!-- Bọc bảng trong div table-container -->
    <div class="table-container">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th>Trạng Thái</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ptpLoaiSanPhams as $item)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $item->ptpMaLoai }}</td>
                        <td>{{ $item->ptpTenLoai }}</td>
                        <td>{{ $item->ptpTrangThai }}</td>
                        <td class="button-group">
                            <a href="{{ route('ptpadmins.ptploaisanpham.ptpview', $item->id) }}" class="btn btn-primary btn-sm text-uppercase fw-bold px-1 py-1">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/ptp-admins/ptp-loai-san-pham/ptp-edit/{{$item->id}}" class="btn btn-warning btn-sm text-uppercase fw-bold px-1 py-1">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="/ptp-admins/ptp-loai-san-pham/ptp-delete/{{$item->id}}" class="btn btn-danger btn-sm text-uppercase fw-bold px-1 py-1"
                                onclick="return confirm('Bạn có chắc chắn xóa không?')">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Chưa có thông tin loại sản phẩm</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

<style>
    .button-group {
        display: flex;
        gap: 2px; /* Khoảng cách giữa các nút */
    }

    .table-container {
        max-height: 400px; /* Giới hạn chiều cao */
        overflow-y: auto; /* Bật thanh cuộn dọc */
        border: 1px solid #ccc; /* Viền container */
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th, table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    table th {
        background-color: #f2f2f2;
    }
</style>
