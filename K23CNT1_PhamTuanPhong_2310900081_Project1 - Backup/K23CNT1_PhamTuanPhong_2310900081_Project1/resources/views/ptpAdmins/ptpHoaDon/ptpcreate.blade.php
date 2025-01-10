@extends('_layouts.admins._master')
@section('title','Thêm Mới Hóa Đơn')

@section('content')
<div class="container">
    <h2 class="my-4">Thêm Mới Hóa Đơn</h2>

    <form action="{{ route('ptpadmins.ptphoadon.ptpcreatesubmit') }}" method="POST">
        @csrf
        <div>
            <label for="ptpMaHoaDon">Mã hóa đơn:</label>
            <input type="text" name="ptpMaHoaDon" id="ptpMaHoaDon"  class="form-control" required>
            @error('ptpMaHoaDon')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    
        <div>
            <label for="ptpMakhachhang">Mã khách hàng:</label>
            <select name="ptpMakhachhang" id="ptpMakhachhang"  class="form-control" required>
                @foreach($ptpkhachhang as $khachhang)
                    <option value="{{ $khachhang->id }}">{{ $khachhang->ptpHotenkhachhang }}</option>
                @endforeach
            </select>
            @error('ptpMakhachhang')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Ngày Hóa Đơn -->
        <div class="form-group mb-1">
            <label for="ptpNgayHoaDon">Ngày Hóa Đơn</label>
            <input type="date" name="ptpNgayHoaDon" id="ptpNgayHoaDon" class="form-control" value="{{ old('ptpNgayHoaDon') }}" required>
            @error('ptpNgayHoaDon')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Họ Tên Khách Hàng -->
        <div class="form-group mb-1">
            <label for="ptpHotenKhachHang">Họ Tên Khách Hàng</label>
            <input type="text" name="ptpHotenKhachHang" id="ptpHotenKhachHang" class="form-control" value="{{ old('ptpHotenKhachHang') }}" required>
            @error('ptpHotenKhachHang')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group mb-1">
            <label for="ptpEmail">Email</label>
            <input type="email" name="ptpEmail" id="ptpEmail" class="form-control" value="{{ old('ptpEmail') }}">
            @error('ptpEmail')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Điện Thoại -->
        <div class="form-group mb-1">
            <label for="ptpDienThoai">Điện Thoại</label>
            <input type="text" name="ptpDienThoai" id="ptpDienThoai" class="form-control" value="{{ old('ptpDienThoai') }}">
            @error('ptpDienThoai')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Địa Chỉ -->
        <div class="form-group mb-1">
            <label for="ptpDiaChi">Địa Chỉ</label>
            <input type="text" name="ptpDiaChi" id="ptpDiaChi" class="form-control" value="{{ old('ptpDiaChi') }}">
            @error('ptpDiaChi')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Tổng Giá Trị -->
        <div class="form-group mb-1">
            <label for="ptpTongGiaTri">Tổng Giá Trị</label>
            <input type="number" name="ptpTongGiaTri" id="ptpTongGiaTri" class="form-control" value="{{ old('ptpTongGiaTri') }}" step="0.01" required>
            @error('ptpTongGiaTri')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <!-- Trạng Thái -->
        <div class="form-group mb-1">
            <label>Trạng Thái</label>
            <div>
                <input type="radio" id="active" name="ptpTrangThai" value="1" {{ old('ptpTrangThai') == '1' ? 'checked' : '' }} checked>
                <label for="active">Hiển Thị</label>

                <input type="radio" id="inactive" name="ptpTrangThai" value="0" {{ old('ptpTrangThai') == '0' ? 'checked' : '' }}>
                <label for="inactive">Khóa</label>
            </div>
            @error('ptpTrangThai')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Thêm Mới</button>
        <a href="{{ route('ptpadmins.ptphoadon.ptplist') }}" class="btn btn-secondary">Quay Lại</a> 
    </form>
</div>
@endsection
