@extends('_layouts.admin.master')
@section('title', 'Sửa tài khoản quản trị')
@section('content-body')
    <div class="container">
        <div class="row mb-3">
            <h1>Sửa tài khoản quản trị</h1>
        </div>
        <form action="{{route('ptpadmins.ptpadmin.ptpeditsubmit', ['$ptpID' => $ptpadmin->id])}}" method="POST">
            @csrf
            <section class="mb-3">
                <div class="row mb-3">
                    <div class="col-2">
                        <label class=" h2 mt-2">Tài khoản: </label>
                    </div>
                    <div class="col-3">
                        <input class="form-control" value="{{$ptpadmin->ptpTaiKhoan}}" name="ptpTaiKhoan" style="font-size: 1.5rem; border-width: 2px; border-color: black; border-style: solid; height:60px">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">
                        <label class="h2 mt-2">Mật khẩu: </label>
                    </div>
                    <div class="col-3">
                        <input class="form-control" value="{{$ptpadmin->ptpMatKhau}}" name="ptpMatKhau" style="font-size: 1.5rem; border-width: 2px; border-color: black; border-style: solid; height:60px">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">
                        <label class="h2 mt-2">Trạng thái: </label>
                    </div>
                    <div class="col-3">
                        <select class="form-select" style="font-size: 1.5rem; border-width: 2px; border-color: black; border-style: solid; height: 60px;" name="ptpTrangThai">
                            <option value="1" {{ $ptpadmin->ptpTrangThai == 1 ? 'selected' : '' }}>Hoạt động</option>
                            <option value="0" {{ $ptpadmin->ptpTrangThai == 0 ? 'selected' : '' }}>Khoá</option>
                        </select>

                    </div>
                </div>
            </section>
            <div>
                <button class="btn btn-success">Sửa</button>
                <a href="{{route('ptpadmins.ptpadmin.ptplist')}}" class="btn btn-primary">Quay về</a>
            </div>
        </form>

    </div>
@endsection