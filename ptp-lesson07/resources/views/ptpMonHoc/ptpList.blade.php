<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PTP - Danh sách khoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<body>
<section class="container my-3">
    <div class="card">
        <div class="card-header">
            <h1>Danh sách môn học</h1>
        </div>
        <div class="card-body">
            <table class="table table -bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã môn học</th>
                        <th>Tên môn học</th>
                        <th>Số tiết</th>
                        <th class="text-center">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $stt=0;
                    @endphp
                    @foreach ($ptpMonHocs as $item)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <td>1</td>
                        <td>{{$item->PTPMAMH}}</td>
                        <td>{{$item->PTPTENMH}}</td>
                        <td>{{$item->PTPSOTIET}}</td>
                        <td> <a href="/monhocs/detail/{{$item->PTPMAMH}}" class="btn btn-success">
                                Chi tiết <i class="fa-solid fa-eye"></i></a>
                             <a href="/monhocs/edit/{{$item->PTPMAMH}}" class="btn btn-primary">
                                Sửa <i class="fa-solid fa-pen-to-square"></i></a>
                             <a href="/monhocs/delete/{{$item->PTPMAMH}}" class="btn btn-danger"
                                                                            onclick="return confirm('Bạn muốn xóa không?');"
                                >Xóa <i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5">
                            <h3>Tổng số môn học: {{$ptpMonHocs->count()}}</h3>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <a href="/monhocs/insert" class="btn btn-primary">Thêm mới <i class="fa-solid fa-circle-plus"></i></a>
</section>
</body>
</html>