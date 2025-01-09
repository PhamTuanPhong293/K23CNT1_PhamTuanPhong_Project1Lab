@extends('_layouts.admins._master')
@section('title', 'Thêm mới sản phẩm')

@section('content-body')
<div class="container border p-3 bg-white">
    <div class="row">
        <div class="col">
            <form action="{{ route('ptpadmins.ptpsanpham.ptpcreatesubmit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h2>Thêm mới sản phẩm</h2>
                </div>
                <div class="card-body container-fluid">
                    <div class="mb-3 row">
                        <label for="ptpMaSanPham" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ old('ptpMaSanPham') }}" id="ptpMaSanPham" name="ptpMaSanPham">
                            @error('ptpMaSanPham')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpTenSanPham" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ old('ptpTenSanPham') }}" id="ptpTenSanPham" name="ptpTenSanPham">
                            @error('ptpTenSanPham')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpHinhAnh" class="col-sm-2 col-form-label">Hình ảnh</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="ptpHinhAnh" name="ptpHinhAnh" accept="image/*">
                            @error('ptpHinhAnh')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpSoLuong" class="col-sm-2 col-form-label">Số lượng</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ old('ptpSoLuong') }}" id="ptpSoLuong" name="ptpSoLuong">
                            @error('ptpSoLuong')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpDonGia" class="col-sm-2 col-form-label">Đơn giá</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ old('ptpDonGia') }}" id="ptpDonGia" name="ptpDonGia">
                            @error('ptpDonGia')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="ptpMaLoai" class="form-label">Loại Danh Mục</label>
                        <select name="ptpMaLoai" id="ptpMaLoai" class="form-control">
                            @foreach ($ptpLoaiSanPham as $item)
                                <option value="{{ $item->id }}">{{ $item->ptpTenLoai }}</option>
                            @endforeach
                        </select>
                        @error('ptpMaLoai')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                        <div class="col-sm-10">
                            <input type="radio" id="ptpTrangThai1" name="ptpTrangThai" value="1" {{ old('ptpTrangThai') == '1' ? 'checked' : '' }}>
                            <label for="ptpTrangThai1">Hiển Thị</label>
                            &nbsp;
                            <input type="radio" id="ptpTrangThai0" name="ptpTrangThai" value="0" {{ old('ptpTrangThai') == '0' ? 'checked' : '' }}>
                            <label for="ptpTrangThai0">Khóa</label>
                            @error('ptpTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Ghi lại</button>
                    <a href="{{ route('ptpadmins.ptpsanpham.ptplist') }}" class="btn btn-secondary">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
