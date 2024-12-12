<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PTP - Thêm mới thông tin khoa </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('ptpkhoa.ptpInsertSubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thêm mới thông tin khoa</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="PTPMAKH" class="col-sm-2 col-form-label">Mã khoa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                        id="PTPMAKH" name="PTPMAKH"
                                        value="{{old('PTPMAKH')}}">
                                    @error('PTPMAKH')
                                        <div class="text-danger">{{ $message }}</div>   
                                    @enderror
                            </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="PTPTENKH" class="col-sm-2 col-form-label">Tên khoa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" 
                                        id="PTPTENKH" name="PTPTENKH"
                                        value="{{old('PTPTENKH')}}">
                                    @error('PTPTENKH')
                                        <div class="text-danger">{{ $message }}</div>   
                                    @enderror
                            </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Submit</button>
                    <a href="/khoas" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>