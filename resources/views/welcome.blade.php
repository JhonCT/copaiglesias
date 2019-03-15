<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro Copa Centenario 2019 </title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
	<link href="{{asset('favicon.ico')}}" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

	<style>
			.login-img3-body{

  background: url({{asset('/coloradmin/img/depor.jpg')}}) no-repeat center center fixed; 

  -webkit-background-size: cover;

  -moz-background-size: cover;

  -o-background-size: cover;

  background-size: cover;

}
		@media (min-width: 1281px) {
  
	.title {
		font-family: 'Roboto', cursive; 
        color: white; 
        font-size: 3rem;
        text-align:center;
        background-color: rgba(4, 4, 4, 0.48);
        border-radius: 5px;
        margin-top:2%;
        margin-bottom: -7%;

	}
	.form-control {
		margin-bottom: 5%;
	}
   
}

/* 
  ##Device = Laptops, Desktops
  ##Screen = B/w 1025px to 1280pxs
*/

@media (min-width: 1025px) and (max-width: 1280px) {
  
 .title {
		font-family: 'Roboto', cursive; 
        color: white; 
        font-size: 2.5rem;
        text-align:center;
        background-color: rgba(4, 4, 4, 0.48);
        border-radius: 5px;
        margin-top:2%;
        margin-bottom: -7%;
	 
	}
  .form-control {
				margin-bottom: 5%;
			}
}

/* 
  ##Device = Tablets, Ipads (portrait)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) {
  

  .title {
		font-family: 'Roboto', cursive; 
        color: white; 
        font-size: 1.4rem;
		padding: 0;
	    text-align:center;
        background-color: rgba(4, 4, 4, 0.48);
        border-radius: 5px;
        margin-top:2%;
        margin-bottom: -7%;
	}
	.form-control {
				margin-bottom: 5%;
			}
}

/* 
  ##Device = Tablets, Ipads (landscape)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  
.title {
		font-family: 'Roboto', cursive; 
        color: white; 
        font-size: 1.4rem;
	    padding: 0;
	    text-align:center;
        background-color: rgba(4, 4, 4, 0.48);
        border-radius: 5px;
        margin-top:2%;
        margin-bottom: -7%;
	}
  .form-control {
				margin-bottom: 5%;
			}
}

/* 
  ##Device = Low Resolution Tablets, Mobiles (Landscape)
  ##Screen = B/w 481px to 767px
*/

@media (min-width: 481px) and (max-width: 767px) {
  
  .title {
		font-family: 'Roboto', cursive;
        color: white; 
        font-size: 1.4rem;
	    text-align:center;
        background-color: rgba(4, 4, 4, 0.48);
        border-radius: 5px;
        margin-top:2%;
        margin-bottom: -7%;
	}
  .form-control {
				margin-bottom: 5%;
			}
}

/* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {
  
.title {
		font-family: 'Roboto', cursive; 
        color: white; 
        font-size: 1rem;
        text-align:center;
        background-color: rgba(4, 4, 4, 0.48);
        border-radius: 5px;
        margin-top:2%;
        margin-bottom: -7%;
    
	}
  .form-control {
				margin-bottom: 5%;
			}
}
	</style>
</head>
	
<body class="login-img3-body">
<div class="container-fluid"> <!--#9A2E46-->
    <div class="row justify-content-center">
    </div>
    <div class="row justify-content-center">
        <!--div class="mx-auto col-sm-6">
            <-p class="title">Copa Centenario</p->
        </div-->

        <div class="mx-auto col-sm-6">
         <p class="title">UPeU Juega - Inter Iglesias</p>
            <div class="card" style="border-radius: 30px; margin-top: 10%; box-shadow: 10px 10px black; font-size: 14px; background-color: rgba(255, 255, 255, 0.85) !important;">
                <div class="card-body">
                    <form  accept-charset="UTF-8"
                          enctype="multipart/form-data">
                          <p><b>Datos del Delgado</b></p>
                            <hr>
                        @csrf
                        <div class="form-group row">
                            
                            <div class="col-lg-4">
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombres" style="font-size: 14px;" required>
                            </div>	
							<div class="col-lg-4" >
                                <input type="text" id="paterno" name="paterno" class="form-control" placeholder="Apellido Paterno" style="font-size: 14px;" required>
                            </div>
                            <div class="col-lg-4" >
                                <input type="text" id="materno" name="materno" class="form-control" placeholder="Apellido Materno" style="font-size: 14px;" required>
                            </div>
  
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-4">
                                <input class="form-control" type="text" id="dni" placeholder="Ingrese DNI" name="dni" style="font-size: 14px;" required>
                            </div>   
							<div class="col-lg-4">
                                <input class="form-control" type="email" id="email" placeholder="Ingrese su Email" name="correo" style="font-size: 14px;" required>
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control" type="number" id="tel" placeholder="Ingrese Celular" name="tel" style="font-size: 14px;" required>
                            </div>
                        </div>
						<hr>
                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label form-control-label"><b>Disciplina Deportivas</b></label>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="flv" value="Futsal Libre Varones"
                                                   name="disciplina[]"
                                                   onchange="toggleCheckbox(this)">
                                            <label class="form-check-label">Futsal Libre Varones</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input class="form-control" type="text" id="flvc" onkeyup="vercantidad()" value="0" name="cantidad" style="font-size: 14px;" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="fmv" value="Futsal Master Varones"
                                                   name="disciplina[]"
                                                   onchange="toggleCheckbox(this)">
                                            <label class="form-check-label">Futsal Master Varones</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input class="form-control" type="text" id="fmvc" onkeyup="vercantidad()" value="0" name="cantidad" style="font-size: 14px;" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="vld" value="Voley Libre Damas"
                                                   name="disciplina[]"
                                                   onchange="toggleCheckbox(this)">
                                            <label class="form-check-label">Voley Libre Damas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input class="form-control" type="text"  id="vldc"  onkeyup="vercantidad()" value="0" name="cantidad" style="font-size: 14px;" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bv" value="Basquet Varones"
                                                   name="disciplina[]"
                                                   onchange="toggleCheckbox(this)">
                                            <label class="form-check-label">Básquet Varones</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input class="form-control" type="text" id="bvc" onkeyup="vercantidad()"  value="0" name="cantidad" style="font-size: 14px;" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bd" value="Basquet Damas"
                                                   name="disciplina[]"
                                                   onchange="toggleCheckbox(this)">
                                            <label class="form-check-label">Básquet Damas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input class="form-control" type="text" id="bdc" onkeyup="vercantidad()" value="0" name="cantidad" style="font-size: 14px;" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-6 col-form-label form-control-label">Costo</label>
                            <div class="col-lg-6">
                                <input class="form-control" name="costo" value="S/. 0" id="costo" onkeyup="vercantidad()" readonly=”readonly” required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="file" class="custom-file-label" id="archivo">Subir Formato de Jugadores</label>
                                <input class="custom-file-input" type="file" name="file" id="file" lang="en" onchange="nombreArchivo()" accept="application/msexcel" required>
                            </div>
                            <div class="col-lg-6" style="text-align: right; font-size: 15px">
                                <p>Descargue el formato. <a href="recursos/formato-inscrpciones.xlsx">Aquí</a></p>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" onchange="reglamento(this)">
                                <label class="form-check-label">Acepto haber leido el reglamento de la Copa Centenario</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm disabled" id="btnsave" type="submit" style="background-color:#992e45; border-color:#6b202e;" >
                            Registrarse
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lee y Descarga el Reglamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="500" src="{{asset('recursos/Reglamento.pdf')}}" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>

<script>

function vercantidad(){

    var flvc = $("#flvc").val();        
    var fmvc = $("#fmvc").val();        
    var bdc = $("#bdc").val();        
    var vldc = $("#vldc").val();        
    var bvc = $("#bvc").val();      

    var cantidaddis = parseInt(flvc)+parseInt(fmvc)+parseInt(bdc)+parseInt(vldc)+parseInt(bvc);
        
        
        switch (cantidaddis) {
            case 0:
                document.getElementById("costo").value = "S/. 0";
                break;
            case 1:
            document.getElementById("costo").value = "S./ 150";
                break;
            case 2:
            document.getElementById("costo").value = "S/. 210";
                break;
            case 3:
            document.getElementById("costo").value = "S/. 270";
                break;
            case 4:
            document.getElementById("costo").value = "S/. 330";
                break;
            case 5:
            document.getElementById("costo").value = "S/. 390";
                break;
            default:
                if (cantidaddis > 5) {
                    document.getElementById("costo").value = "S/.390";
                }
                break;
        }
}
var jh = []; 

    $("#btnsave").click(function (){
        vercantidad();
        var nombre = $("#nombre").val();        
        var paterno = $("#paterno").val();        
        var materno = $("#materno").val();        
        var dni = $("#dni").val();        
        var email = $("#email").val();        
        var cel = $("#cel").val();        

        var flv = $("#flv").val();        
        var flvc = $("#flvc").val();        
        var fmv = $("#fmv").val();        
        var fmvc = $("#fmvc").val();        
        var bd = $("#bd").val();        
        var bdc = $("#bdc").val();        
        var vld = $("#vld").val();        
        var vldc = $("#vldc").val();        
        var bv = $("#bv").val();   
        var bvc = $("#bvc").val();      
     
        var cantidades = [];

        cantidades.push(flvc);
        cantidades.push(fmvc);
        cantidades.push(bdc);
        cantidades.push(vldc);
        cantidades.push(bvc);

        var nombres = [];
        nombres.push(flv);
        nombres.push(fmv);
        nombres.push(bd);
        nombres.push(vld);
        nombres.push(bv);

        

        for (let i = 0; i < cantidades.length; i++) {
            jh.push(nombres[i], cantidades[i], ver(cantidades[i]));    
        }

        /*$.post("{{route('inscripcion')}}", 
            {
                nombre:nombre, 
                paterno:paterno, 
                materno:materno,
                dni: dni,
                email: email,
                cel: cel,
                disciplina: jh,
                cantidad: parseInt(flvc)+parseInt(fmvc)+parseInt(bdc)+parseInt(vldc)+parseInt(bvc);

            }, function(data) {

        })*/
    })

    function ver(cantidad){
        if (cantidad == "0") {
            return "no";
        } else {
            return "si";
        }
    }

    function toggleCheckbox(element) {
        var costoDOM = document.getElementById('costo').value;
        var x = costoDOM.split(" ");
        var costo = x[1];
        costo = parseInt(costo);

    }

    /*function reglamento(element) {
        if (element.checked == true) {
            document.getElementById('btnsave').classList.remove('disabled');
            document.getElementById('btnsave').classList.add('active');
            document.getElementById('btnsave').disabled = false;

            $('.modal').modal('show');
        } else {
            document.getElementById('btnsave').classList.remove('active');
            document.getElementById('btnsave').classList.add('disabled');
            document.getElementById('btnsave').disabled = true; 
        }
    }*/

	function nombreArchivo(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(.xlsx)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Por favor suba el archivo que descargaste previamente, Ejem: (formato.xlsx )');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("archivo").innerHTML = document.getElementById("file").files[0].name;
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
	
</script>
<style type="text/css">
    #costo {
        border: 0px;
        color: red;
        text-decoration: none;
        background-color: white;
        text-align: center;
        padding: 0px;
        font-weight: bold;
        outline: none !important;
        box-shadow: none
    }
</style>
</body>
</html>