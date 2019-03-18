
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
              <input class="form-control" placeholder="Buscar Egresado" type="text">
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
                                <img alt="" src="{{asset('/coloradmin/img/avatar.jpg')}}" >
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
                    <th><i class="fas fa-users"></i>  &nbsp; Celular</th>
                    <th><i class="fas fa-futbol"></i> &nbsp; Disciplina</th>
                    <th><i class="fas fa-edit"></i> &nbsp; Ficha de Inscripción</th>
                    <th><i class="fas fa-user-tie"></i> &nbsp; Delegado</th>
                    <th><i class="fas fa-envelope"></i> &nbsp; Email</th>
                    <th><i class="fas fa-hand-holding-usd"></i> &nbsp; Costo</th>
                    <th><i class="fas fa-hand-holding-usd"></i> &nbsp; N° de Operación</th>
                    <th><i class="fas fa-hand-holding-usd"></i> &nbsp; Fecha</th>                    
                    <th><i class="fas fa-hand-holding-usd"></i> &nbsp; Voucher</th>      
                    <th><i class="fas fa-user-cog"></i> &nbsp; Estado</th>
                  </tr>
                 </thead>
                <tbody>
                

                     @foreach ($inscripciones as $inscripcion)
                <tr>
                    <td>{{$inscripcion->iglesia}}</td>	
					          <td>{{$inscripcion->celular}}</td>
                    <td>{{$inscripcion->disciplina}}</td>
                    <td><a href="../storage/app/{{$inscripcion->jugadores}}" >{{$inscripcion->archivo}}</a></td>
                    <td>{{$inscripcion->nombre}} {{$inscripcion->paterno}} {{$inscripcion->materno}}</td>                    
                    <td>{{$inscripcion->correo}}</td>
                    <td>S/. {{$inscripcion->costo}}</td>
                    <td>{{$inscripcion->operacion}}</td>
                    <td>{{$inscripcion->fecha}}</td>
                    <td><a href="../storage/app/{{$inscripcion->jugadores}}" >{{$inscripcion->voucher}}</a></td>
                    
					@if ($inscripcion->estado === "inscrito")
    					<td>							
                      <div class="btn-group">                        
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>   						  
						<button class="btn btn-success" onclick="eliminar({{$inscripcion->id}});" style="margin-left: 5px"><i class="fas fa-trash-alt"></i></button>                        
                      </div>
                    </td>
					@elseif ($inscripcion->estado === null) 
    					<td>							
                      <div class="btn-group">                        
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>						  
						  <button class="btn btn-primary" onclick="eliminar({{$inscripcion->id}});" style="margin-left: 5px"><i class="fas fa-trash-alt"></i></button>                        
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
		function eliminar(id){
			fetch("http://localhost:8000/eliminar/"+id)
			.then(data => {
				window.location.href = "{{route('reporte')}}";
			});
		}
		
		//PRUEBA SERVICIOS 
		$(document).ready(function () {
			fetch("https://api-lamb.upeu.edu.pe/cw/datos-egresados?dni=46038794",
				{
					credentials: 'include',
      				method: 'get',
      				headers: {
        				"Authorization": "qgrooepiodbongkp0vt8aopj2e24",
      				}
				})
			.then(data => console.log(data.respone));
		})
		
		function prueba() {
			fetch("https://api-lamb.upeu.edu.pe\cw\datos-egresados?dni=46038794")
			.then(data => console.log(data.respone))
		}
	</script>

</body>

</html>

