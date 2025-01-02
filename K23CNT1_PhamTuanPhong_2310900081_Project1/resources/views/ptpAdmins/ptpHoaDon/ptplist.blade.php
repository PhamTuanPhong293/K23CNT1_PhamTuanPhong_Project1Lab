@extends('_layouts.admins._master')
@section('title', 'Danh sách hóa đơn')

@section('content-body')
    <h1>Danh sách hóa đơn</h1>
    <a href="{{ route('ptpadmins.ptphoadon.ptpcreate') }}" class="btn btn-primary">Thêm mới</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã hóa đơn</th>
                <th>Khách hàng</th>
                <th>Ngày lập</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ptpHoaDon as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->ptpMaHoaDon }}</td>
                    <td>{{ $item->khachHang ? $item->khachHang->ptpTenKhachHang : 'Không xác định' }}</td>
                    <td>{{ $item->ptpNgayLap }}</td>
                    <td>{{ $item->ptpTongTien }}</td>
                    <td>{{ $item->ptpTrangThai ? 'Kích hoạt' : 'Không kích hoạt' }}</td>
                    <td>
                        <a href="{{ route('ptpadmins.ptphoadon.ptpdetail', $item->id) }}" class="btn btn-success">Xem</a>
                        <a href="{{ route('ptpadmins.ptphoadon.ptp-edit', $item->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('ptpadmins.ptphoadon.ptpdelete', $item->id) }}" method="POST" style="display:inline;">
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