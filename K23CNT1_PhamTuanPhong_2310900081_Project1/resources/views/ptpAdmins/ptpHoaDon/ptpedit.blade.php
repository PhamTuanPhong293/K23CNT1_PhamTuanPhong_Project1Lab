@extends('_layouts.admins._master')
@section('title', 'Sửa hóa đơn')

@section('content-body')
    <h1>Sửa hóa đơn</h1>
    <form action="{{ route('ptpadmins.ptphoadon.ptpcreatesubmit', $ptphoadon->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="ptpMaHoaDon" class="form-label">Mã hóa đơn</label>
            <input type="text" class="form-control" id="ptpMaHoaDon" name="ptpMaHoaDon" value="{{ $ptphoadon->ptpMaHoaDon }}" required>
        </div>
        <div class="mb-3">
            <label for="ptpMaKhachHang" class="form-label">Khách Hàng</label>
            <select name="ptpMaKhachHang" id="ptpMaKhachHang" class="form-control">
                @foreach ($ptpkhachhang as $item)
                    <option value="{{ $item->id }}" 
                        {{ old('ptpMaKhachHang', $ptphoadon->ptpMaKhachHang) == $item->id ? 'selected' : '' }}>
                        {{ $item->ptpHoTenKhachHang }}
                    </option>
                @endforeach
            </select>
            @error('ptpMaKhachHang')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="ptpNgayLap" class="form-label">Ngày lập</label>
            <input type="date" class="form-control" id="ptpNgayLap" name="ptpNgayLap" value="{{ $ptphoadon->ptpNgayLap }}" required>
        </div>
        <div class="mb-3">
            <label for="ptpTongTien" class="form-label">Tổng tiền</label>
            <input type="number" step="0.01" class="form-control" id="ptpTongTien" name="ptpTongTien" value="{{ $ptphoadon->ptpTongTien }}" required>
        </div>
        <div class="mb-3">
            <label for="ptpTrangThai" class="form-label">Trạng thái</label>
            <select class="form-control" id="ptpTrangThai" name="ptpTrangThai" required>
                <option value="1" {{ $ptphoadon->ptpTrangThai == 1 ? 'selected' : '' }}>Kích hoạt</option>
                <option value="0" {{ $ptphoadon->ptpTrangThai == 0 ? 'selected' : '' }}>Không kích hoạt</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('ptpadmins.ptphoadon.ptplist') }}" class="btn btn-secondary">Quay lại</a>
    </form>
@endsection