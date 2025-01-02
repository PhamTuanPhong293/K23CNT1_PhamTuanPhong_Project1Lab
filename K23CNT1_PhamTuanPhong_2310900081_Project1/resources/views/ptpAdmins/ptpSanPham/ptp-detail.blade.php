@extends('_layouts.admins._master')
@section('title', 'Chi Tiết sản phẩm')

@section('content-body')
    <div class="container">
        <div class="row mb-3">
            <h1>Chi tiết sản phẩm</h1>
        </div>
        <section class="mb-3">
            <div class="row mb-3">
                <div class="col-3">
                    <label class=" h2 mt-2">Mã sản phẩm: </label>
                </div>
                <div class="col-3">
                    <input class="form-control" value="{{$ptpSanPham->ptpMaSanPham}}" readonly  >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label class="h2 mt-2">Tên sản phẩm: </label>
                </div>
                <div class="col-3">
                    <input class="form-control" value="{{$ptpSanPham->ptpTenSanPham}}" readonly >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label class="h2 mt-2">Hình ảnh: </label>
                </div>
                <div class="col-3">
                    <img src="{{ asset('storage/' . $ptpSanPham->ptpHinhAnh) }}" alt="Hình ảnh sản phẩm" >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label class="h2 mt-2">Số lượng: </label>
                </div>
                <div class="col-3">
                    <input class="form-control" value="{{$ptpSanPham->ptpSoLuong}}" readonly >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label class="h2 mt-2">Đơn giá: </label>
                </div>
                <div class="col-3">
                    <input class="form-control" value="{{$ptpSanPham->ptpDonGia}}" readonly >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label class="h2 mt-2">Mã loại: </label>
                </div>
                <div class="col-3">
                    <input class="form-control" value="{{$ptpSanPham->ptpMaLoai}}" readonly >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label class="h2 mt-2">Trạng thái: </label>
                </div>
                <div class="col-3">
                    <input class="form-control" value="{{ $ptpSanPham->ptpTrangThai == 1 ? 'Hiển thị' : 'Ẩn' }}" readonly >
                </div>
            </div>
        </section>
        <a href="{{route('ptpAdmins.ptpSanPham.ptp-list')}}" class="btn btn-primary">Quay về</a>
    </div>
@endsection