<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <style>
        .sideBar{
            width: 250px;
            background: gray;
            height: 100vh;
            overflow-y: auto;
            border-radius: 10px;
        }
        .wrapper{
            width: calc(100% - 250px);
            background: #fff;
            padding: 1rem;
            border-radius: 10px;
        }
        header {
            border-radius: 10px;
        }
        .content-body {
            border-radius: 10px;
        }
        @media (max-width: 768px) {
                .sideBar {
                    width: 100%;
                    height: auto;
                }
                .wrapper {
                    width: 100%;
                }
        }
        table {
            width: 100%;
            border-collapse: separate; /* Để bảng hỗ trợ bo góc */
            border-spacing: 0; /* Loại bỏ khoảng cách giữa các ô */
            overflow: hidden;
            border-radius: 10px; /* Bo tròn góc */
            background: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Thêm hiệu ứng đổ bóng */
        }

        table thead tr {
            background: #f8f9fa; /* Nền tiêu đề bảng */
            border-radius: 10px 10px 0 0; /* Bo tròn góc trên */
        }

        table tbody tr:last-child td {
            border-radius: 0 0 10px 10px; /* Bo tròn góc dưới */
        }

        table th, table td {
            padding: 0.75rem;
            text-align: left;
            border: 1px solid #ddd; /* Đường viền ô */
        }
        
    </style>
</head>
<body style="background: #ccc">
    <section class="container-fluid d-flex">
        <nav class="sideBar m-1">
            @include('_layouts.admins._menu')
        </nav>
        <section class="wrapper m-1">
            <header class="border my-1">
                @include('_layouts.admins._headerTitle')
            </header>
            <section class="content-body my-1 p-1">
                @yield('content-body')
            </section>
        </section>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous" defer></script>
</body>
</html>