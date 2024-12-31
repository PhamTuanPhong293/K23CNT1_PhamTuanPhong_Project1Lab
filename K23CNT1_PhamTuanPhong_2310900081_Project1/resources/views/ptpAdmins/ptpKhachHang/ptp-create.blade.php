@extends('_layouts.admins._master')
@section('title', 'Thêm sản phẩm')
@section('content-body')
<style>
    .input {
        font-size: larger;
        font-weight: bolder;
    }

    input[type="file"] {
        margin-top: -10px;
        padding: 15px;
        font-size: 16px;
        border: 2px solid #ced4da;
        border-radius: 5px;
        background-color: #f8f9fa;
        cursor: pointer;
    }

    input[type="file"]:hover {
        border-color: #80bdff;
        background-color: #e9ecef;
    }

    input[type="file"]:focus {
        border-color: #80bdff;
        outline: none;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('ptpadmins.ptpkhachhang.ptpcreatesubmit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2>Thêm mới khách hàng</h2>
                    </div>
                    <div class="card-body">
                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="ptpMaKhachHang" class="col-form-label">Mã khách hàng</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="text" id="ptpMaKhachHang" class="form-control" name="ptpMaKhachHang" style="height: 60px">
                            </div>
                            @error('ptpMaKhachHang')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="ptpHoTenKhachHang" class="col-form-label">Họ và tên khách hàng</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="text" id="ptpHoTenKhachHang" class="form-control" name='ptpHoTenKhachHang' style="height: 60px">
                            </div>
                            @error('ptpHoTenKhachHang')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="ptpEmail" class="col-form-label">Email</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="text" id="ptpEmail" class="form-control" name='ptpEmail' style="height: 60px">
                            </div>
                            @error('ptpEmail')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="ptpMatKhau" class="col-form-label">Mật khẩu</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="text" id="ptpMatKhau" class="form-control" name='ptpMatKhau' style="height: 60px">
                            </div>
                            @error('ptpMatKhau')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="ptpDienThoai" class="col-form-label">Điện thoại</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="text" id="ptpDienThoai" class="form-control" name='ptpDienThoai' style="height: 60px">
                            </div>
                            @error('ptpDienThoai')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="ptpDiaChi" class="col-form-label">Địa chỉ</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="text" id="ptpDiaChi" class="form-control" name='ptpDiaChi' style="height: 60px">
                            </div>
                            @error('ptpDiaChi')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row g-5 align-items-center mb-3">
                            <div class="col-lg-1">
                                <label for="ptpNgayDangKy" class="col-form-label">Ngày đăng ký</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <input type="date" id="ptpNgayDangKy" class="form-control" name='ptpNgayDangKy' style="height: 60px">
                            </div>
                            @error('ptpNgayDangKy')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row g-5 align-items-center mb-2">
                            <div class="col-lg-1">
                                <label for="ptpTrangThai" class="col-form-label">Trạng thái</label>
                            </div>
                            <div class="col-lg-3 border-3">
                                <select class="form-select" name="ptpTrangThai" style="font-size: 1.5rem; border-width: 3px;  border-style: solid; height: 60px;">
                                    <option value="1" selected>Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Thêm</button>
                        <a href="{{ route('ptpadmins.ptpkhachhang.ptplist') }}" class="btn btn-primary">Quay lại</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
