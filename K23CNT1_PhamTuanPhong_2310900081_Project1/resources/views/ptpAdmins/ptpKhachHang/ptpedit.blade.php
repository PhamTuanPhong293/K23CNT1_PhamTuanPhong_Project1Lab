@extends('_layouts.admins._master')
@section('title','Chi Tiết Hóa Đơn')
@section('content-body')
    <section class="container">
        <!-- Form for editing customer data -->
        <form action="{{ route('ptpadmins.ptpkhachhang.ptpeditsubmit', ['id' => $ptpkhachHang->id]) }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin khách hàng</h3>
                </div>
                <div class="card-body">
                    <!-- Customer ID (Read-only) -->
                    <div class="mb-3 row">
                        <label for="ptpMakhachhang" class="col-sm-2 col-form-label">Mã Khách Hàng</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="ptpMakhachhang" name="ptpMakhachhang" value="{{ $ptpkhachHang->ptpMakhachhang }}">
                        </div>
                    </div>

                    <!-- Customer Name -->
                    <div class="mb-3 row">
                        <label for="ptpHotenkhachhang" class="col-sm-2 col-form-label">Họ Tên Khách Hàng</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ptpHotenkhachhang" name="ptpHotenkhachhang" value="{{ $ptpkhachHang->ptpHotenkhachhang }}">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-3 row">
                        <label for="ptpEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="ptpEmail" name="ptpEmail" value="{{ $ptpkhachHang->ptpEmail }}">
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="mb-3 row">
                        <label for="ptpDienThoai" class="col-sm-2 col-form-label">Điện Thoại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ptpDienThoai" name="ptpDienThoai" value="{{ $ptpkhachHang->ptpDienThoai }}">
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="mb-3 row">
                        <label for="ptpDiaChi" class="col-sm-2 col-form-label">Địa Chỉ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ptpDiaChi" name="ptpDiaChi" value="{{ $ptpkhachHang->ptpDiaChi }}">
                        </div>
                    </div>

                    <!-- Registration Date -->
                    <div class="mb-3 row">
                        <label for="ptpNgayDK" class="col-sm-2 col-form-label">Ngày Đăng Ký</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="ptpNgayDK" name="ptpNgayDK" value="{{ $ptpkhachHang->ptpNgayDK }}">
                        </div>
                    </div>

                    <!-- Status (Active/Inactive) -->
                    <div class="mb-3 row">
                        <label for="ptpTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                        <div class="col-sm-10">
                            <div>
                                <input type="radio" id="ptpTrangThai1" name="ptpTrangThai" value="0" {{ $ptpkhachHang->ptpTrangThai == 0 ? 'checked' : '' }}>
                                <label for="ptpTrangThai1">Không hoạt động</label>
                            </div>
                            <div>
                                <input type="radio" id="ptpTrangThai2" name="ptpTrangThai" value="1" {{ $ptpkhachHang->ptpTrangThai == 1 ? 'checked' : '' }}>
                                <label for="ptpTrangThai2">Hoạt động</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <!-- Update Button -->
                    <button class="btn btn-primary mx-2">Cập nhật</button>
                    <!-- Back Button -->
                    <a href="{{ route('ptpadmins.ptpkhachhang.ptplist') }}" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </form>
    </section>
@endsection
