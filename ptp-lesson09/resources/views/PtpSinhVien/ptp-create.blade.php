
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        input{
            border-radius: 0 !important
        }
    </style>
</head>
<body>
    <section class="container">
        <form action="{{route('PtpSinhVien.ptpCreateSubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Thêm mới sinh viên</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="ptpMaSV" class="col-sm-2 col-form-label">Mã sinh viên</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="ptpMaSV" name="ptpMaSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpHoSV" class="col-sm-2 col-form-label">Họ sinh viên</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="ptpHoSV" name="ptpHoSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpTenSV" class="col-sm-2 col-form-label">Tên sinh viên</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="ptpTenSV" name="ptpTenSV">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpPhai" class="col-sm-2 col-form-label">Giới tính</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="ptpPhai" name="ptpPhai">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpNgaySinh" class="col-sm-2 col-form-label">Ngày sinh</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="ptpNgaySinh" name="ptpNgaySinh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpNoiSinh" class="col-sm-2 col-form-label">Nơi sinh</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="ptpNoiSinh" name="ptpNoiSinh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ptpMaKH" class="col-sm-2 col-form-label">Nơi sinh</label>
                        <div class="col-sm-10">
                            <select name="ptpMaKH" id="ptpMaKH">
                                <option value="">--Chọn khoa--</option>
                                <option value="AV">Anh Văn</option>
                                <option value="TH">Tin học</option>
                                <option value="TR">Triết học</option>
                            </select>
                        </div>
                    </div>                    
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <button class="btn btn-primary">Thêm mới</button>
                    <a href="/ptp-sinhviens" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>