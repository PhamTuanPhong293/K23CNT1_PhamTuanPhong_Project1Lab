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
            @php
            $stt = 0;
        @endphp
        @forelse ($ptphoadon as $item)
            @php
                $stt++;
            @endphp
                <tr>
                    <td>{{ $stt }}</td>
                    <td>{{ $item->ptpMaHoaDon }}</td>
                    <td>{{ $item->ptpMaKhachHang }}</td>
                    <td>{{ $item->ptpNgayHoaDon }}</td>
                    <td>{{ $item->ptpNgayNhan }}</td>
                    <td>{{ $item->ptpHoTenKhachHang }}</td>
                    <td>{{ $item->ptpEmail }}</td>
                    <td>{{ $item->ptpDienThoai }}</td>
                    <td>{{ $item->ptpDiaChi }}</td>
                    <td>{{ number_format($item->ptpTongGiaTri, 0, ',', '.') }} VND</td>
                    
                    <td>
                        @if($item->ptpTrangThai == 0)
                            <span class="badge bg-primary">Chờ Sử Lý</span>
                        @elseif($item->ptpTrangThai == 1)
                            <span class="badge bg-warning">Đang Sử Lý</span>
                        @else
                            <span class="badge bg-success">Đã Hoàn Thành</span>
                        @endif
                    </td>
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