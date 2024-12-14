<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container">
  
        <div class="card">
            <div class="card-header">
                <h1>Danh sách sinh viên</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã sinh viên</th>
                            <th>Họ sinh viên</th>
                            <th>Tên sinh viên</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Nơi sinh</th>
                            <th>Mã khoa</th>
                            <th>Học bổng</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                            @php
                            $stt=0;
                            @endphp
                        @foreach ($PtpSinhViens as $item)
                            @php
                                $stt++;
                            @endphp
                            <tr>
                                <td class="text-center">{{$stt}}</td>
                                <td>{{$item->ptpMaSV}}</td>
                                <td>{{$item->ptpHoSV}}</td>
                                <td>{{$item->ptpTenSV}}</td>
                                <td>{{$item->ptpPhai}}</td>
                                <td>{{$item->ptpNgaySinh}}</td>
                                <td>{{$item->ptpNoiSinh}}</td>
                                <td>{{$item->ptpMaKH}}</td>
                                <td class="text-right">{{$item->ptpHocBong}}</td>
                                <td class="text-center">
                                    view / edit / delete
                                </td>
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
               <h3>Tổng số sinh viên: {{$PtpSinhViens->count()}}</h3>
               <a href="/ptp-sinhviens/create" class="btn btn-primary">Thêm mới</a>
            </div>
        </div>
    </section>
</body>
</html>