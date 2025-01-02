@extends('_layouts.admins._master')
@section('title', 'Sửa sản phẩm')

@section('content-body')
<div class="container border p-3 bg-white">
    <div class="row">
        <div class="col">
            <form action="{{route('ptpadmins.ptpsanpham.ptpeditsubmit', ['id' => $ptpSanPham->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $ptpSanPham->id }}">
                <div class="card-header">
                    <h2>Sửa sản phẩm</h2>
                </div>
                <div class="card-body container-fluid">
                    <div class="mb-3 row">
                        <label for="ptpMaSanPham" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ptpMaSanPham" name="ptpMaSanPham" 
                                value="{{ old('ptpMaSanPham', $ptpSanPham->ptpMaSanPham) }}">
                            @error('ptpMaSanPham')
                                <span class="text-danger">{{ $message }}</span>  
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpTenSanPham" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ptpTenSanPham" name="ptpTenSanPham" 
                                value="{{ old('ptpTenSanPham', $ptpSanPham->ptpTenSanPham) }}">
                            @error('ptpTenSanPham')
                                <span class="text-danger">{{ $message }}</span>  
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpHinhAnh" class="col-sm-2 col-form-label">Hình ảnh</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="ptpHinhAnh" name="ptpHinhAnh">
                            @error('ptpHinhAnh')
                                <span class="text-danger">{{ $message }}</span>  
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpSoLuong" class="col-sm-2 col-form-label">Số lượng</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="ptpSoLuong" name="ptpSoLuong" 
                                value="{{ old('ptpSoLuong', $ptpSanPham->ptpSoLuong) }}">
                            @error('ptpSoLuong')
                                <span class="text-danger">{{ $message }}</span>  
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpDonGia" class="col-sm-2 col-form-label">Đơn giá</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="ptpDonGia" name="ptpDonGia" step="0.01"
                                value="{{ old('ptpDonGia', $ptpSanPham->ptpDonGia) }}">
                            @error('ptpDonGia')
                                <span class="text-danger">{{ $message }}</span>  
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpMaLoai" class="col-sm-2 col-form-label">Loại danh mục</label>
                        <div class="col-sm-10">
                            <select name="ptpMaLoai" id="ptpMaLoai" class="form-control">
                                <option value="">-- Chọn Loại Sản Phẩm --</option>
                                @foreach ($ptpLoaiSanPham as $item)
                                    <option value="{{ $item->ptpMaLoai }}" 
                                        {{ old('ptpMaLoai', $ptpSanPham->ptpMaLoai) == $item->ptpMaLoai ? 'selected' : '' }}>
                                        {{ $item->ptpTenLoai }}
                                    </option>
                                @endforeach
                            </select>
                            @error('ptpMaLoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="ptpTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                        <div class="col-sm-10">
                            <input type="radio" id="ptpTrangThai1" name="ptpTrangThai" value="0" 
                                {{ old('ptpTrangThai', $ptpSanPham->ptpTrangThai) == 0 ? 'checked' : '' }}>
                            <label for="ptpTrangThai1">Hiển Thị</label>
                            &nbsp;
                            <input type="radio" id="ptpTrangThai0" name="ptpTrangThai" value="1" 
                                {{ old('ptpTrangThai', $ptpSanPham->ptpTrangThai) == 1 ? 'checked' : '' }}>
                            <label for="ptpTrangThai0">Khóa</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save">Ghi lại</i>&nbsp;</button>
                    <a href="{{ route('ptpadmins.ptpsanpham.ptplist') }}" class="btn btn-secondary"><i class="fas fa-arrow-left">Quay lại</i>&nbsp;</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
