@extends('_layouts.admins._master')
@section('title','Sửa Loại Khách Hàng')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <!-- Update the form action route to pass the ptpMaKhachHang as a parameter -->
                <form action="{{ route('ptpadmins.ptpkhachhang.ptpeditsubmit', ['id' => $ptpkhachhang->id]) }}" method="POST">
                    @csrf
                    <!-- Hidden input for the ID -->
                    <input type="hidden" name="id" value="{{ $ptpkhachhang->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại Khách Hàng</h1>
                        </div>
                        <div class="card-body">
                            <!-- Mã Loại (disabled) -->
                            <div class="mb-3">
                                <label for="ptpMaKhachHang" class="form-label">Mã Khách Hàng</label>
                                <input type="text" class="form-control" id="ptpMaKhachHang" name="ptpMaKhachHang" value="{{ $ptpkhachhang->ptpMaKhachHang }}" >
                                @error('ptpMaKhachHang')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <!-- Tên Loại -->
                            <div class="mb-3">
                                <label for="ptpHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="ptpHoTenKhachHang" name="ptpHoTenKhachHang" value="{{ old('ptpHoTenKhachHang', $ptpkhachhang->ptpHoTenKhachHang) }}" >
                                @error('ptpHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ptpEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="ptpEmail" name="ptpEmail" value="{{ old('ptpEmail', $ptpkhachhang->ptpEmail) }}" >
                                @error('ptpEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ptpMatKhau" class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" id="ptpMatKhau" name="ptpMatKhau" value="{{ old('ptpMatKhau', $ptpkhachhang->ptpMatKhau) }}" >
                                @error('ptpMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ptpDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="ptpDienThoai" name="ptpDienThoai" value="{{ old('ptpDienThoai', $ptpkhachhang->ptpDienThoai) }}" >
                                @error('ptpDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ptpDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="ptpDiaChi" name="ptpDiaChi" value="{{ old('ptpDiaChi', $ptpkhachhang->ptpDiaChi) }}" >
                                @error('ptpDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ptpNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                                <input type="date" class="form-control" id="ptpNgayDangKy" name="ptpNgayDangKy" value="{{ old('ptpNgayDangKy', $ptpkhachhang->ptpNgayDangKy) }}" >
                                @error('ptpNgayDangKy')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Trạng Thái -->
                            <div class="mb-3">
                                <label for="ptpTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="ptpTrangThai0" name="ptpTrangThai" value="0" {{ old('ptpTrangThai', $ptpkhachhang->ptpTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="ptpTrangThai0">Hoạt Động</label>
                                    &nbsp;
                                    <input type="radio" id="ptpTrangThai1" name="ptpTrangThai" value="1" {{ old('ptpTrangThai', $ptpkhachhang->ptpTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="ptpTrangThai1">Tạm Khóa</label>
                           
                                    &nbsp;
                                    <input type="radio" id="ptpTrangThai2" name="ptpTrangThai" value="2" {{ old('ptpTrangThai', $ptpkhachhang->ptpTrangThai) == 2 ? 'checked' : '' }} />
                                    <label for="ptpTrangThai0">Khóa</label>
                                </div>
                                @error('ptpTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer">
                            <!-- Change button label to "Cập nhật" (Update) -->
                            <button class="btn btn-success" type="submit">Cập nhật</button>
                            <a href="{{ route('ptpadmins.ptpkhachhang.ptplist') }}" class="btn btn-primary">Trở lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection