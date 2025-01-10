@extends('_layouts.admins._master')
@section('title', 'Chi tiết hóa đơn')

@section('content-body')
<div class="container border p-3 bg-white">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2>Chi tiết hóa đơn</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Mã Hóa Đơn:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpHoaDon->ptpMaHoaDon }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Mã Khách Hàng:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpHoaDon->ptpMaKhachHang }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Họ Tên Khách Hàng:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpHoaDon->ptpHoTenKhachHang }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpHoaDon->ptpEmail }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Điện Thoại:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpHoaDon->ptpDienThoai }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Địa Chỉ:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpHoaDon->ptpDiaChi }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Ngày Hóa Đơn:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpHoaDon->ptpNgayHoaDon }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tổng Giá Trị:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ number_format($ptpHoaDon->ptpTongGiaTri, 2) }} VND">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Trạng Thái:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpHoaDon->ptpTrangThai ? 'Hoạt động' : 'Không hoạt động' }}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('ptpadmins.ptphoadon.ptplist') }}" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
