@extends('_layouts.admins._master')
@section('title', 'Danh sách hóa đơn chi tiết')
@section('content-body')
    <div class="container my-4">
        <!-- Session Messages -->
        @if (session('message'))
        <div class="alert alert-success" style="font-weight: bold;">
            {{ session('message') }}
        </div>
        @elseif (session('error'))
        <div class="alert alert-danger" style="font-weight: bold;">
            {{ session('error') }}
        </div>
        @endif

        <div class="row mb-3">
            <h1>Danh sách hóa đơn chi tiết</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id Hóa Đơn</th>
                        <th>Id Sản Phẩm</th>
                        <th>Số Lượng Mua</th>
                        <th>Đơn Giá Mua</th>
                        <th>Thành Tiền</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ptpCTHoaDon as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ptpHoaDonID }}</td>
                            <td>{{ $item->ptpSanPhamID }}</td>
                            <td>{{ $item->ptpSoLuongMua }}</td>
                            <td>{{ number_format($item->ptpDonGiaMua, 0, ',', '.') }} VND</td>
                            <td>{{ number_format($item->ptpThanhTien, 0, ',', '.') }} VND</td>
                            <td>
                                @switch($item->ptpTrangThai)
                                    @case(0)
                                        Chờ xử lý
                                        @break
                                    @case(1)
                                        Đang xử lý
                                        @break
                                    @case(2)
                                        Đã hoàn thành
                                        @break
                                    @default
                                        Không xác định
                                @endswitch
                            </td>
                            <td>
                                <a href="{{ route('ptpadmins.ptpcthoadon.ptpdetail', ['id' => $item->id]) }}" class="btn btn-primary">Xem</a>
                                <a href="{{ route('ptpadmins.ptpcthoadon.ptpeditsubmit', ['id' => $item->id]) }}" class="btn btn-warning">Sửa</a>
                                <a href="{{ route('ptpadmins.ptpcthoadon.ptpdelete', ['id' => $item->id]) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">Chưa có hóa đơn chi tiết nào</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
