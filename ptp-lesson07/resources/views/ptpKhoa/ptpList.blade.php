<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PTP - Danh sách khoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container my-3">
      <h1>Danh sách khoa</h1>
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Mã khoa</th>
                <th>Tên khoa</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @php
                $stt=0;
            @endphp
            @foreach ($ptpKhoas as $item)
                @php
                    $stt++;
                @endphp
            <tr>
                <th>{{$stt}}</th>
                <td>{{$item->PTPMAKH}}</td>
                <td>{{$item->PTPTENKH}}</td>
                <td>
                    <a href="/khoas/detail/{{$item->PTPMAKH}}" class="btn btn-success">Chi tiết <i class="fa-solid fa-eye"></i></a>
                    <a href="/khoas/edit/{{$item->PTPMAKH}}" class="btn btn-primary">
                        Sửa <i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="/khoas/delete/{{$item->PTPMAKH}}" class="btn btn-danger"
                                                                    onclick="return confirm('Bạn muốn xóa không?');"
                        >Xóa <i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <a href="/khoas/insert" class="btn btn-primary">Thêm mới <i class="fa-solid fa-circle-plus"></i></a>
    </section>
</body>
</html>