@extends('_layouts.admins._master')
@section('title', 'Sửa chi tiết hóa đơn')

@section('content-body')
<h1>Sửa chi tiết hóa đơn</h1>
<form action="{{ route('ptpadmins.ptpcthoadon.ptpcreatesubmit', $ptpCTHoaDon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="ptpMaHoaDon" class="form-label">Mã hóa đơn</label>
        <select class="form-control" id="ptpMaHoaDon" name="ptpMaHoaDon" required>
            @foreach ($ptpHoaDon as $hoaDon)
                <option value="{{ $hoaDon->ptpMaHoaDon }}" {{ $ptpCTHoaDon->ptpMaHoaDon == $hoaDon->ptpMaHoaDon ? 'selected' : '' }}>{{ $hoaDon->ptpMaHoaDon }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="ptpMaSanPham" class="form-label">Mã sản phẩm</label>
        <select class="form-control" id="ptpMaSanPham" name="ptpMaSanPham" required>
            @foreach ($ptpSanPham as $sanPham)
                <option value="{{ $sanPham->ptpMaSanPham }}" {{ $ptpCTHoaDon->ptpMaSanPham == $sanPham->ptpMaSanPham ? 'selected' : '' }}>{{ $sanPham->ptpMaSanPham }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="ptpSoLuong" class="form-label">Số lượng</label>
        <input type="number" class="form-control" id="ptpSoLuong" name="ptpSoLuong" value="{{ $ptpCTHoaDon->ptpSoLuong }}" required>
    </div>
    <div class="mb-3">
        <label for="ptpDonGia" class="form-label">Đơn giá</label>
        <input type="number" step="0.01" class="form-control" id="ptpDonGia" name="ptpDonGia" value="{{ $ptpCTHoaDon->ptpDonGia }}" required>
    </div>
    <div class="mb-3">
        <label for="ptpThanhTien" class="form-label">Thành tiền</label>
        <input type="number" step="0.01" class="form-control" id="ptpThanhTien" name="ptpThanhTien" value="{{ $ptpCTHoaDon->ptpThanhTien }}" required>
    </div>
    <div class="mb-3">
        <label for="ptpTrangThai" class="form-label">Trạng thái</label>
        <select class="form-control" id="ptpTrangThai" name="ptpTrangThai" required>
            <option value="1" {{ $ptpCTHoaDon->ptpTrangThai == 1 ? 'selected' : '' }}>Kích hoạt</option>
            <option value="0" {{ $ptpCTHoaDon->ptpTrangThai == 0 ? 'selected' : '' }}>Không kích hoạt</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <a href="{{ route('ptpadmins.ptpcthoadon.ptplist') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection