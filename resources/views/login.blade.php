<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Copa Inter-Iglesias UPeU</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{asset('favicon.ico')}}" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body style="background: url({{asset('/coloradmin/img/depor.jpg')}}) no-repeat center center fixed;background-size: cover;" >
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="row justify-content-center">
                <form action="{{route('reporte')}}" method="POST" class="col-sm-4 card" style="font-size: 14px; margin-top: 5%; margin-bottom: 10%;  background-color: rgba(255, 255, 255, 0.85) !important;">
                    @csrf
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="col-sm-6 col-form-label col-form-label-md">Usuario</h4>
                        <input class="form-control form-control-sm" name="user" type="text">
                        <h4 class="col-sm-6 col-form-label col-form-label-md">Contraseña</h4>
                        <input class="form-control form-control-sm" name="pass" type="password">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html> 