<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PTP - Danh sách môn học</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('ptpmonhoc.ptpEditSubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin chi tiết môn học cần sửa</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="PTPMAMH" class="col-sm-2 col-form-label">Mã môn học</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" 
                                        id="PTPMAMH" name="PTPMAMH"
                                        value="{{$monhoc->PTPMAMH}}">
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="PTPTENMH" class="col-sm-2 col-form-label">Tên môn học</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                        id="PTPTENMH" name="PTPTENMH"
                                        value="{{$monhoc->PTPTENMH}}">
                            </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Submit</button>
                    <a href="/monhocs" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>