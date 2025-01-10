@extends('_layouts.admins._master')
@section('title', 'Danh sách tài khoản quản trị')
@section('content-body')
    <div class="container my-4">
        @if (session('message'))
        <div class="alert alert-success"style="font-weight: bold;">
            {{ session('message') }}
        </div>
        @endif
        <div class="row mb-3">
            <h1>Danh sách tài khoản quản trị</h1>
        </div>
        <a href="{{route('ptpadmins.ptpadmin.ptplist')}}"><button class="btn btn-success 10px mb-3"> <i class="fa-solid fa-plus"></i> Thêm mới</button></a>
        <div class="row text-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ptpadmin as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$item->ptpTaiKhoan}}</td>
                            <td>{{$item->ptpMatKhau}}</td>
                            <td>{{$item->ptpTrangThai==1?"Hoạt động":"Khoá"}}</td>

                            <td class="text-center">
                                <a href="{{ route('ptpadmins.ptpadmin.ptpview', $item->id) }}" class="btn btn-primary btn-sm text-uppercase fw-bold px-1 py-1">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="/ptp-admins/ptp-admin/ptp-edit/{{$item->id}}" class="btn btn-warning btn-sm text-uppercase fw-bold px-1 py-1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="/ptp-admins/ptp-admin/ptp-delete/{{$item->id}}" class="btn btn-danger btn-sm text-uppercase fw-bold px-1 py-1"
                                    onclick="return confirm('Bạn có chắc chắn xóa không?')">
                                    <i class="fa-solid fa-trash"></i>
                            </td>

                        </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection