<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PTP - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('ptpaccount.ptpLoginSubmit')}}" method="POST">
          @csrf
            <div class="car">
                <div class="card-header">
                    <h1>PTP - Login</h1>
                </div>
                    
                <div class="card-body">
                    <div class="mb-3">
                        <label for="ptpEmail" class="form-label">Email</label>
                        <input type="email" class="form-control"
                            id="ptpEmail" name="ptpEmail"
                            placeholder="ptpEmail@example.com"/>
                        <span id="email-error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="ptpPass" class="form-label">Password</label>
                        <input type="password" class="form-control"
                            id="ptpPass" name="ptpPass"
                            placeholder="xxxx"/>
                        <span id="email-error"></span>
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                    @if (Session::has('ptp-error'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{!! \Session::get('ptp-error') !!}</li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </section>
</body>
</html>