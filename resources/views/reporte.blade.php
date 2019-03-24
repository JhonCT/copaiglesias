<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link href="{{asset('favicon.ico')}}" rel="shortcut icon" />

    <title>Reporte Copa Inter-Iglesias 2019</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('/coloradmin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('/coloradmin/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('/coloradmin/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset('/coloradmin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/coloradmin/css/style-responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>
    <!-- container section start -->
    <section id="container" class="">
        <!--header start-->
        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo"><span class="lite1">Reporte</span> <span class="lite">Copa Centenario</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Buscar Egresado" onkeyup="buscarPorDni(this)" type="text">
                        </form>
                    </li>
                </ul>
                <!--  search form end -->
            </div>

            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">

                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{asset('/coloradmin/img/avatar.jpg')}}">
                            </span>
                            <span class="username">Joselito Valdez</span>

                        </a>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>

        <!--main content start-->
        <section id="container" class="">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
                <!-- page start-->

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <!--header class="panel-heading">
                Advanced Table
              </header-->

                            <table class="table table-striped table-advance table-hover">
                                <thead>
                                    <tr>
                                        <th><i class="fas fa-user-graduate"></i> &nbsp; Iglesia</th>
                                        <th><i class="fas fa-users"></i> &nbsp; Celular</th>
                                        <th><i class="fas fa-futbol"></i> &nbsp; Disciplina</th>
                                        <th><i class="fas fa-futbol"></i> &nbsp; Cantidad</th>
                                        <th><i class="fas fa-edit"></i> &nbsp; Ficha de Inscripción</th>
                                        <th><i class="fas fa-user-tie"></i> &nbsp; Delegado</th>
                                        <th><i class="fas fa-user-tie"></i> &nbsp; DNI</th>
                                        <th><i class="fas fa-envelope"></i> &nbsp; Email</th>
                                        <th><i class="fas fa-hand-holding-usd"></i> &nbsp; Costo</th>
                                        <th><i class="fas fa-hand-holding-usd"></i> &nbsp; Tipo de pago</th>
                                        <th><i class="fas fa-user-cog"></i> &nbsp; Estado</th>
                                    </tr>
                                </thead>
                                <tbody id="inscripciones">

                                    @foreach ($inscripciones as $inscripcion)
                                    <?php
                                    $discipli = explode(",", $inscripcion->disciplina);
                                    $cantidisci = explode(",", $inscripcion->canti_disci);
                                    ?>
                                    <tr>
                                        <td>{{$inscripcion->iglesia}}</td>
                                        <td>{{$inscripcion->celular}}</td>
                                        <td>
                                            @foreach ($discipli as $disci)
                                            <p>{{$disci}}</p>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($cantidisci as $cd)
                                            <p style="text-align:center">{{$cd}}
                                                <p>
                                                    @endforeach
                                        </td>
                                        <td><a href="download/{{$inscripcion->archivo}}">Descargar Ficha</a></td>
                                        <td>{{$inscripcion->nombre}} {{$inscripcion->paterno}} {{$inscripcion->materno}}</td>
                                        <td>{{$inscripcion->dni}}</td>
                                        <td>{{$inscripcion->correo}}</td>
                                        <td>S/. {{$inscripcion->costo}}</td>
                                        <td>
                                            <div class="container">
                                                <div style="display:flex;">
                                                    @if ($inscripcion->voucher == null)
                                                    <p style="margin-left: 5%; margin-right: 5%">Visa</p>
                                                    <p style="margin-left: 5%; margin-right: 5%">{{$inscripcion->operacion}}</p>
                                                    @elseif ($inscripcion->voucher != null)
                                                    <p style="margin-left: 5%; margin-right: 5%">Voucher</p>
                                                    <p style="margin-left: 5%; margin-right: 5%; width: 100px"><a href="../storage/app/{{$inscripcion->voucher}}">Ver Voucher</a></p>
                                                    @endif

                                                </div>
                                            </div>
                                        </td>

                                        @if ($inscripcion->estado === "inscrito")
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-success" style="font-size: 9px; margin-right: 5px"><i class="icon_check_alt2"></i></button>
                                                <button class="btn btn-danger" style="font-size: 9px" onclick="eliminar({{$inscripcion->id}});"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </td>

                                        @elseif ($inscripcion->estado === null)
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-danger" style="font-size: 9px; margin-right: 5px"><i class="icon_close_alt2"></i></button>
                                                <button class="btn btn-primary" style="font-size: 9px; margin-right: 5px" onclick="eliminar({{$inscripcion->id}});"><i class="fas fa-trash-alt"></i></button>
                                                @if ($inscripcion->voucher != null) 
                                                <a class="btn btn-warning" style="font-size: 9px" href="validarVoucher/{{$inscripcion->id}}"><i class="fas fa-cog"></i></a>
                                                @endif
                                            </div>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
        <div class="text-right" style="padding-right: 15px;">
            <div class="credits">
                Designed by <a href="#">Ideas UPeU</a>
            </div>
        </div>
    </section>
    <!-- container section end -->
    <!-- javascripts -->
    <script src="{{asset('/coloradmin/js/jquery.js')}}"></script>
    <script src="{{asset('/coloradmin/js/bootstrap.min.js')}}"></script>
    <!-- nicescroll -->
    <script src="{{asset('/coloradmin/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('/coloradmin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="{{asset('/coloradmin/js/scripts.js')}}"></script>

    <script>
        function eliminar(id) {
            fetch("http://localhost:8000/eliminar/" + id)
                .then(data => {
                    window.location.href = "{{route('reporte')}}";
                });
        }

        /*function buscarPorDni(e) {                                              
            if (e.value.length == 8) {              
                fetch("http://localhost:8000/findByDni/" + e.value)
                .then(data => {return data.json()}) 
                .then(data => (data) {
                    $("#inscripciones").append("<tr><td>"+data.iglesia+"</td><td>"+data.celular+"</td><td>"+data.disciplina+"</td><td>"+data.canti_disci+"</td><td>"+data.archivo+"</td><td>"+data.nombre + data.paterno + data.materno +"</td><td>"+data.dni+"</td><td>"+data.correo+"</td><td>"+data.costo+"</td><td><div class="container"><div style="display:flex;">@if ("+data.voucher+" == null)<p style="margin-left: 5%; margin-right: 5%">Visa</p><p style="margin-left: 5%; margin-right: 5%">"+data.operacion+"</p>@elseif ("+data.voucher+" != null)<p style="margin-left: 5%; margin-right: 5%">Voucher</p><p style="margin-left: 5%; margin-right: 5%; width: 100px"><a href="../storage/app/"+data.voucher+" >Ver Voucher</a></p>@endif</div></div></td>@if ("+data.estado+" === "inscrito")<td><div class="btn-group"><button class="btn btn-success" style="font-size: 9px; margin-right: 5px"><i class="icon_check_alt2"></i></button><button class="btn btn-danger" style="font-size: 9px" onclick="eliminar({{$inscripcion->id}});"><i class="fas fa-trash-alt"></i></button></div></td>@elseif ("+data.estado+" === null)<td><div class="btn-group"><button class="btn btn-danger" style="font-size: 9px; margin-right: 5px"><i class="icon_close_alt2"></i></button><button class="btn btn-primary" style="font-size: 9px; margin-right: 5px" onclick="eliminar({{$inscripcion->id}});"><i class="fas fa-trash-alt"></i></button>@if ("+data.estado+" != null) <a class="btn btn-warning" style="font-size: 9px" href="validarVoucher/{{$inscripcion->id}}"><i class="fas fa-cog"></i></a>@endif</div></td>@endif</tr>")
                });
            }
        }*/
    </script>
    <style>
    </style>
</body>

</html> 