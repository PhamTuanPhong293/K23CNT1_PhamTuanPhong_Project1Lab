@extends('_layouts.admins._master')
@section('title','Sửa thông tin loại sản phẩm')

@section('content-body')
<div class="container border p-3 bg-white">
    <div class="row">
        <div class="col">
            <form action="{{route('ptpadmins.ptploaisanpham.ptpeditsubmit')}}" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{$ptpLoaiSanPham->id}}">
                <div class="card-header">
                    <h2>Sửa thông tin loại sản phẩm</h2>
                </div>
                <div class="card-body container-fluid">
                    <div class="mb-3 row">
                        <label for="ptpMaLoai" class="col-sm-2 col-form-label">Mã Loại</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"   value="{{$ptpLoaiSanPham->ptpMaLoai}}" id="ptpMaLoai" name="ptpMaLoai">
                        @error('ptpMaLoai')
                          <span class="text-danger">{{$message}}</span>  
                        @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpTenLoai" class="col-sm-2 col-form-label">Tên Loại</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{$ptpLoaiSanPham->ptpTenLoai}}" id="ptpTenLoai" name="ptpTenLoai">
                          @error('ptpTenLoai')
                            <span class="text-danger">{{$message}}</span>  
                          @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                        <div class="col-sm-10">
                            @if ($ptpLoaiSanPham->ptpTrangThai == 1)
                                <input type="radio" id="ptpTrangThai1" name="ptpTrangThai" value="1" checked />
                                <label for="ptpTrangThai1">Hiển thị</label>
                                &nbsp;
                                <input type="radio" id="ptpTrangThai0" name="ptpTrangThai" value="0" />
                                <label for="ptpTrangThai0">Khóa</label>
                            @else
                                <input type="radio" id="ptpTrangThai1" name="ptpTrangThai" value="1" />
                                <label for="ptpTrangThai1">Hiển thị</label>
                                &nbsp;
                                <input type="radio" id="ptpTrangThai0" name="ptpTrangThai" value="0" checked />
                                <label for="ptpTrangThai0">Khóa</label>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Ghi lại</button>
                    <a href="{{route('ptpadmins.ptploaisanpham')}}" class="btn btn-secondary">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection