<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ptp - Danh sách tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container my-3">
        <h1>Ptp - Danh sách tài khoản</h1>
        <hr/>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Password</th>
                    <th>FullName</th>
                </tr>
            </thead>
            <tbody>
                @php
                 $stt=0   
                @endphp
                @foreach ($list as $item)
                @php
                    $stt++;
                @endphp
                <tr>
                    <td>1</td>
                    <td>{{$item["id"]}}</td>
                    <td>{{$item["UserName"]}}</td>
                    <td>{{$item["Password"]}}</td>
                    <td>{{$item["FullName"]}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>