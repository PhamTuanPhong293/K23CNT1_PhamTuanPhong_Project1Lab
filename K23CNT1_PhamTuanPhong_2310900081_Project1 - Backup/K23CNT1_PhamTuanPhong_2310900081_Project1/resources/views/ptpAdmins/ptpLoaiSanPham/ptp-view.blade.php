@extends('_layouts.admins._master')
@section('title', 'Chi tiết loại sản phẩm')

@section('content-body')
<div class="container border p-3 bg-white">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2>Chi tiết loại sản phẩm</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Mã Loại:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpLoaiSanPham->ptpMaLoai }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tên Loại:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpLoaiSanPham->ptpTenLoai }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Trạng Thái:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpLoaiSanPham->ptpTrangThai ? 'Hiển thị' : 'Khóa' }}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('ptpadmins.ptploaisanpham') }}" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection