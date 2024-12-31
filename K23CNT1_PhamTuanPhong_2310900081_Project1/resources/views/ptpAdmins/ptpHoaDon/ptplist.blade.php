@extends('_layouts.admins._master')
@section('title', 'Danh sách hoá đơn')
@section('content-body')
    <div class="container my-4">
        @if (session('message'))
        <div class="alert alert-success" style="font-weight: bold;">
            {{ session('message') }}
        </div>
        @endif
        <div class="row mb-3">
            <h1>Danh sách hoá đơn</h1>
        </div>
        <a href="{{ route('ptpadmins.ptphoadon.ptplist') }}" class="btn btn-success mb-3"><i class="fa-solid fa-plus"></i> Thêm mới</a>

        <div class="table-responsive">
            <table class="table  table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã hoá đơn</th>
                        <th style="width:100px">Mã khách hàng</th>
                        <th>Ngày tạo</th>
                        <th>Ngày nhận</th>
                        <th>Họ tên khách hàng</th>
                        <th>Email</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Giá trị</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ptpHoaDon as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->ptpMaHoaDon }}</td>
                            <td>{{ $item->ptpMaKhachHang }}</td>
                            <td>{{ $item->ptpNgayHoaDon }}</td>
                            <td>{{ $item->ptpNgayNhan }}</td>
                            <td>{{ $item->ptpHoTenKhachHang }}</td>
                            <td>{{ $item->ptpEmail }}</td>
                            <td>{{ $item->ptpDienThoai }}</td>
                            <td>{{ $item->ptpDiaChi }}</td>
                            <td>{{ number_format($item->ptpTongTriGia, 0, ',', '.') }} VND</td>
                            <td>
                                @if ($item->ptpTrangThai == 0)
                                    Chờ xử lý
                                @elseif ($item->ptpTrangThai == 1)
                                    Đang xử lý
                                @elseif ($item->ptpTrangThai == 2)
                                    Đã hoàn thành
                                @else
                                    Không xác định
                                @endif
                            </td>
                            <td class="text-center" style="width:150px">
                                <!-- View Button -->
                                <button class="btn btn-success btn-sm rounded-circle me-1" onclick="window.location.href='/ptp-admin/ptp-admin-view/{{ $item->id }}'" title="Xem chi tiết">
                                    <i class="fa-solid fa-circle-info"></i>
                                </button>

                                <!-- Edit Button -->
                                <button class="btn btn-primary btn-sm rounded-circle me-1" onclick="window.location.href='/ptp-admin/ptp-admin/{{ $item->id }}'" title="Chỉnh sửa">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>

                                <!-- Delete Button -->
                                <form action="{{ route('ptpadmin.ptpdeleteadmin', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn chắc chắn muốn xoá loại sản phẩm này?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm rounded-circle" title="Xoá">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="12" class="text-center">Không có hoá đơn nào</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
