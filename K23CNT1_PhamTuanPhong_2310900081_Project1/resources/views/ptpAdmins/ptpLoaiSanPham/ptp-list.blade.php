@extends('_layouts.admins._master')
@section('title','Danh sách loại sản phẩm')

@section('content-body')
<div class="container border p-3 bg-white">
    <div class="row">
        <div class="col-12">
            <div class="d-flex w-100 justify-content-between">
                <h3>Danh sách loại sản phẩm</h3>
                <a href="{{route('ptpadmins.ptploaisanpham.ptpcreate')}}" class="btn btn-success" >Thêm mới</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Mã Loại</th>
                <th>Tên Loại</th>
                <th>Trạng Thái</th>
                <th>Chức Năng</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ptpLoaiSanPhams as $item)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$item->ptpMaLoai}}</td>
                    <td>{{$item->ptpTenLoai}}</td>
                    <td>{{$item->ptpTrangThai}}</td>
                    <td>
                        <a href="{{ route('ptpadmins.ptploaisanpham.ptpview', $item->id) }}" class="btn btn-primary btn-sm">View<i class="fa-solid fa-eye"></a>
                        <a href="/ptp-admins/ptp-loai-san-pham/ptp-edit/{{$item->id}}" class="btn btn-warning btn-sm">EDIT<i class="fa-solid fa-pen-to-square"></a>
                        <a href="/ptp-admins/ptp-loai-san-pham/ptp-delete/{{$item->id}}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Bạn có chắc chắn xóa không?')">DELETE<i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @empty
            <tr>
                <th colspan="5">Chưa có thông tin loại sản phẩm</th>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection