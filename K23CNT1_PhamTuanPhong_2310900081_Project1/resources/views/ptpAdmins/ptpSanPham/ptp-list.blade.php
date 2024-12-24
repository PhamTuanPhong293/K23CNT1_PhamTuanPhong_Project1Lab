@extends('_layouts.admins._master')
@section('title','Danh sách loại sản phẩm')

@section('content-body')
    <div class="container border p-3 bg-white">
        <div class="row">
            <div class="col-12">
                <div class="d-flex w-100 justify-content-between">
                    <h3>Danh sách loại sản phẩm</h3>
                    <a href="{{route('ptpadmins.ptpsanpham.ptpcreate')}}" class="btn btn-success text-uppercase fw-bold px-3 py-2" ><i class="fa-solid fa-square-plus">Thêm mới</i></a>
                </div>
            </div>
        </div>


        <div class="row">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ptpSanPhams as $item)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $item->ptpMaSanPham }}</td>
                        <td>{{ $item->ptpTenSanPham }}</td>
                        <td>{{ $item->ptpHinhAnh }}</td>
                        <td>{{ $item->ptpSoLuong }}</td>
                        <td>{{ $item->ptpDonGia }}</td>
                        <td>{{ $item->ptpTrangThai }}</td>
                        <td>
                            <a href="/ptp-admins/ptp-san-pham/ptp-detail/{{$item->id}}" class="btn btn-primary btn-sm text-uppercase fw-bold px-1 py-1"><i class="fa-solid fa-eye">VIEW</i></a>
                            <a href="/ptp-admins/ptp-san-pham/ptp-edit/{{$item->id}}" class="btn btn-warning btn-sm text-uppercase fw-bold px-1 py-1"><i class="fa-solid fa-pen-to-square">EDIT</i></a>
                            <a href="/ptp-admins/ptp-san-pham/ptp-delete/{{$item->id}}" class="btn btn-danger btn-sm text-uppercase fw-bold px-1 py-1"
                                onclick="return confirm('Bạn có chắc chắn xóa không?')"><i class="fa-solid fa-trash">DELETE</i></a>
                        </td>
                    </tr>  
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection