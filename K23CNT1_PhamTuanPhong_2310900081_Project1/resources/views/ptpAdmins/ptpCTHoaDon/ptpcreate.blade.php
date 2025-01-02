@extends('_layouts.admins._master')
@section('title', 'Thêm mới chi tiết hóa đơn')

@section('content-body')
<h1>Thêm mới chi tiết hóa đơn</h1>
<form action="{{ route('ptpadmins.ptpcthoadon.ptpeditsubmit') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="ptpMaHoaDon" class="form-label">Mã hóa đơn</label>
        <select class="form-control" id="ptpMaHoaDon" name="ptpMaHoaDon" required>
            @foreach ($ptpHoaDon as $hoaDon)
                <option value="{{ $hoaDon->ptpMaHoaDon }}">{{ $hoaDon->ptpMaHoaDon }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="ptpMaSanPham" class="form-label">Mã sản phẩm</label>
        <select class="form-control" id="ptpMaSanPham" name="ptpMaSanPham" required>
            @foreach ($ptpSanPham as $sanPham)
                <option value="{{ $sanPham->ptpMaSanPham }}">{{ $sanPham->ptpMaSanPham }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="ptpSoLuong" class="form-label">Số lượng</label>
        <input type="number" class="form-control" id="ptpSoLuong" name="ptpSoLuong" required>
    </div>
    <div class="mb-3">
        <label for="ptpDonGia" class="form-label">Đơn giá</label>
        <input type="number" step="0.01" class="form-control" id="ptpDonGia" name="ptpDonGia" required>
    </div>
    <div class="mb-3">
        <label for="ptpThanhTien" class="form-label">Thành tiền</label>
        <input type="number" step="0.01" class="form-control" id="ptpThanhTien" name="ptpThanhTien" required>
    </div>
    <div class="mb-3">
        <label for="ptpTrangThai" class="form-label">Trạng thái</label>
        <select class="form-control" id="ptpTrangThai" name="ptpTrangThai" required>
            <option value="1">Kích hoạt</option>
            <option value="0">Không kích hoạt</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
    <a href="{{ route('ptpadmins.ptpcthoadon.ptplist') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection