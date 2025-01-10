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

        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Chi Tiết Hóa Đơn</h1>
                <!-- Nút Thêm Mới -->
                <a href="/ptp-admins/ptp-ct-hoa-don/ptp-create" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
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
                    @php
                        $stt = 0;
                    @endphp
                    @forelse ($ptpcthoadons as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td>{{ $stt }}</td>
                            <td>{{ $item->ptpHoaDonID }}</td>
                            <td>{{ $item->ptpSanPhamID }}</td>
                            <td>{{ $item->ptpSoLuongMua }}</td>
                            <td>{{ $item->ptpDonGiaMua }}</td>
                            <td>{{ $item->ptpThaptpien }}</td>
                        
                            <td>
                                @if($item->ptpTrangThai == 0)
                                    <span class="badge bg-primary">Hoàn Thành</span>
                                @elseif($item->ptpTrangThai == 1)
                                    <span class="badge bg-success">Trả Lại</span>
                                @else
                                    <span class="badge bg-danger">Xóa</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('ptpadmins.ptpcthoadon.ptpdetail', ['id' => $item->id]) }}" class="btn btn-primary">Xem</a>
                                <a href="{{ route('ptpadmins.ptpcthoadon.ptpeditsubmit', ['id' => $item->id]) }}" class="btn btn-warning">Sửa</a>
                                <a href="{{ route('ptpadmins.ptpcthoadon.ptpdelete', ['id' => $item->id]) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Chưa có hóa đơn chi tiết nào</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
