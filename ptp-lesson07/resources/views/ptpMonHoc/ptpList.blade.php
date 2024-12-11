<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PTP - Danh sách khoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
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
                    @foreach ($monHocs as $item)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
</body>
</html>