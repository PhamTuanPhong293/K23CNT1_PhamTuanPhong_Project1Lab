@extends('_layouts.admins._master')
@section('title', 'Sửa khách hàng')

@section('content-body')
    <h1>Sửa khách hàng</h1>
    <form action="{{ route('ptpadmins.ptpkhachhang.ptpeditsubmit', $ptpKhachHang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="ptpMaKhachHang" class="form-label">Mã khách hàng</label>
            <input type="text" class="form-control" id="ptpMaKhachHang" name="ptpMaKhachHang" value="{{ $ptpKhachHang->ptpMaKhachHang }}" required>
        </div>
        <div class="mb-3">
            <label for="ptpTenKhachHang" class="form-label">Tên khách hàng</label>
            <input type="text" class="form-control" id="ptpTenKhachHang" name="ptpTenKhachHang" value="{{ $ptpKhachHang->ptpTenKhachHang }}" required>
        </div>
        <div class="mb-3">
            <label for="ptpDiaChi" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="ptpDiaChi" name="ptpDiaChi" value="{{ $ptpKhachHang->ptpDiaChi }}" required>
        </div>
        <div class="mb-3">
            <label for="ptpSoDienThoai" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="ptpSoDienThoai" name="ptpSoDienThoai" value="{{ $ptpKhachHang->ptpSoDienThoai }}" required>
        </div>
        <div class="mb-3">
            <label for="ptpEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="ptpEmail" name="ptpEmail" value="{{ $ptpKhachHang->ptpEmail }}" required>
        </div>
        <div class="mb-3">
            <label for="ptpGioiTinh" class="form-label">Giới tính</label>
            <select class="form-control" id="ptpGioiTinh" name="ptpGioiTinh" required>
                <option value="1" {{ $ptpKhachHang->ptpGioiTinh == 1 ? 'selected' : '' }}>Nam</option>
                <option value="0" {{ $ptpKhachHang->ptpGioiTinh == 0 ? 'selected' : '' }}>Nữ</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="ptpNgaySinh" class="form-label">Ngày sinh</label>
            <input type="date" class="form-control" id="ptpNgaySinh" name="ptpNgaySinh" value="{{ $ptpKhachHang->ptpNgaySinh }}" required>
        </div>
        <div class="mb-3">
            <label for="ptpMatKhau" class="form-label">Mật khẩu (để trống nếu không thay đổi)</label>
            <input type="password" class="form-control" id="ptpMatKhau" name="ptpMatKhau">
        </div>
        <div class="mb-3">
            <label for="ptpTrangThai" class="form-label">Trạng thái</label>
            <select class="form-control" id="ptpTrangThai" name="ptpTrangThai" required>
                <option value="1" {{ $ptpKhachHang->ptpTrangThai == 1 ? 'selected' : '' }}>Kích hoạt</option>
                <option value="0" {{ $ptpKhachHang->ptpTrangThai == 0 ? 'selected' : '' }}>Không kích hoạt</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('ptpadmins.ptpkhachhang.ptplist') }}" class="btn btn-secondary">Quay lại</a>
    </form>
@endsection