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
                        <label class="col-sm-2 col-form-label">ID Hóa Đơn:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpCTHoaDon->ptpHoaDonID }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">ID Sản Phẩm:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpCTHoaDon->ptpSanPhamID }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Số Lượng Mua:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpCTHoaDon->ptpSoLuongMua }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Đơn Giá Mua:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpCTHoaDon->ptpDonGiaMua }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Thành Tiền:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpCTHoaDon->ptpThanhTien }}">
                        </div> <!-- Closing the div for Thành Tiền -->
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Trạng Thái:</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ptpCTHoaDon->ptpTrangThai ? 'Hoạt động' : 'Không hoạt động' }}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('ptpadmins.ptpcthoadon.ptplist') }}" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
