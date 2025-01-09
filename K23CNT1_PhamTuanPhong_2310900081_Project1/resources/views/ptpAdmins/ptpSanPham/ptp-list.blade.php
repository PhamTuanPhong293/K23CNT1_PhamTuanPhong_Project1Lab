@extends('_layouts.admins._master')
@section('title','Danh sách loại sản phẩm')

@section('content-body')
    <div class="container border p-3 bg-white">
        <div class="row">
            <div class="col-12">
                <div class="d-flex w-100 justify-content-between">
                    <h3>Danh sách loại sản phẩm</h3>
                    <a href="{{route('ptpadmins.ptpsanpham.ptpcreate')}}" class="btn btn-success text-uppercase fw-bold px-2 py-2" ><i class="fa-solid fa-square-plus"> Thêm mới</i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="table-container">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $stt = 0;
                    @endphp
                    @forelse ($ptpSanPhams as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td>{{ $stt }}</td>
                            <td>{{ $item->ptpMaSanPham }}</td>
                            <td>{{ $item->ptpTenSanPham }}</td>
                            <td >
                                <img src="{{ asset('storage/' . $item->ptpHinhAnh) }}" alt="Sản phẩm {{ $item->ptpMaSanPham }}" width="100" height="100">
                            </td>
                            <td>{{ $item->ptpSoLuong }}</td>
                            <td>{{ number_format($item->ptpDonGia, 0, ',', '.') }} VND</td>
                            <td>{{ $item->ptpMaLoai }}</td>
                            <td>
                                @if($item->ptpTrangThai == 0)
                                    <span class="badge bg-success">Hiển Thị</span>
                                @else
                                    <span class="badge bg-danger">Khóa</span> 
                                @endif 
                            </td>
                            
                            
                            <td class="button-group">
                                @csrf
                                <a href="/ptp-admins/ptp-san-pham/ptp-detail/{{$item->id}}" class="btn btn-primary btn-sm text-uppercase fw-bold px-1 py-1"><i class="fa-solid fa-eye"></i></a>
                                <a href="/ptp-admins/ptp-san-pham/ptp-edit/{{$item->id}}" class="btn btn-warning btn-sm text-uppercase fw-bold px-1 py-1"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="/ptp-admins/ptp-san-pham/ptp-delete/{{$item->id}}" class="btn btn-danger btn-sm text-uppercase fw-bold px-1 py-1" 
                                    onclick="return confirm('Bạn có chắc chắn xóa không?')"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>  
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Không có sản phẩm nào.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<style>
    .button-group {
        display: flex;
        gap: 2px; /* Khoảng cách giữa các nút */
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

    /* Thiết lập container với thanh cuộn */
    .table-container {
        max-height: 400px; /* Giới hạn chiều cao */
        overflow-y: auto; /* Bật thanh cuộn dọc */
        border: 1px solid #ccc; /* Viền container */
    }
</style>
