<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Copa Inter-Iglesias 2019</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{asset('favicon.ico')}}" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <style>
        .login-img3-body {

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
                text-align: center;
                background-color: rgba(4, 4, 4, 0.48);
                border-radius: 5px;
                margin-top: 2%;
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
                text-align: center;
                background-color: rgba(4, 4, 4, 0.48);
                border-radius: 5px;
                margin-top: 2%;
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
                text-align: center;
                background-color: rgba(4, 4, 4, 0.48);
                border-radius: 5px;
                margin-top: 2%;
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
                text-align: center;
                background-color: rgba(4, 4, 4, 0.48);
                border-radius: 5px;
                margin-top: 2%;
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
                text-align: center;
                background-color: rgba(4, 4, 4, 0.48);
                border-radius: 5px;
                margin-top: 2%;
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
                text-align: center;
                background-color: rgba(4, 4, 4, 0.48);
                border-radius: 5px;
                margin-top: 2%;
                margin-bottom: -7%;

            }

            .form-control {
                margin-bottom: 5%;
            }
        }
    </style>
</head>

<body class="login-img3-body">
    <div class="container-fluid">
        <!--#9A2E46-->
        <div class="row justify-content-center">
        </div>
        <div class="row justify-content-center">
            <!--div class="mx-auto col-sm-6">
            <-p class="title">Copa Centenario</p->
        </div-->

            <div class="mx-auto col-sm-6">
                <p class="title">UPeU Juega - Inter Iglesias</p>
                <div class="card" style="font-size: 14px; margin-top: 10%; margin-bottom: 10%;  background-color: rgba(255, 255, 255, 0.85) !important;">
                    <div class="card-body">
                        <form accept-charset="UTF-8" action="{{route('inscripcion')}}" method="POST" enctype="multipart/form-data" id="form">
                            <p><b>Datos del Delgado</b></p>
                            <hr>
                            @csrf
                            <div class="form-group row">

                                <div class="col-lg-4">
                                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombres" style="font-size: 14px;" required>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" id="paterno" name="paterno" class="form-control" placeholder="Apellido Paterno" style="font-size: 14px;" required>
                                </div>
                                <div class="col-lg-4">
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
                                    <input class="form-control" type="number" id="tel" placeholder="Ingrese Celular" name="celular" style="font-size: 14px;" required>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-lg-12 col-form-label form-control-label"><b>Disciplina Deportivas</b></label>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="flv" value="Futsal Libre Varones" name="disciplina[]" onchange="toggleCheckbox(this)">
                                                <label class="form-check-label">Futsal Libre Varones</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="number" id="flvc" max="10" min="0" onchange="vercantidad(event)" value="0" name="cantidad[]" style="font-size: 14px; display: none" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="fmv" value="Futsal Master Varones" name="disciplina[]" onchange="toggleCheckbox(this)">
                                                <label class="form-check-label">Futsal Master Varones</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="number" id="fmvc" max="10" min="0" onchange="vercantidad(event)" value="0" name="cantidad[]" style="font-size: 14px;display: none" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="vld" value="Voley Libre Damas" name="disciplina[]" onchange="toggleCheckbox(this)">
                                                <label class="form-check-label">Voley Libre Damas</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="number" id="vldc" max="10" min="0" onchange="vercantidad(event)" value="0" name="cantidad[]" style="font-size: 14px;display: none" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="bv" value="Basquet Varones" name="disciplina[]" onchange="toggleCheckbox(this)">
                                                <label class="form-check-label">Básquet Varones</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="number" id="bvc" max="10" min="0" onchange="vercantidad(event)" value="0" name="cantidad[]" style="font-size: 14px;display: none" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="bd" value="Basquet Damas" name="disciplina[]" onchange="toggleCheckbox(this)">
                                                <label class="form-check-label">Básquet Damas</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="number" id="bdc" max="10" min="0" onchange="vercantidad(event)" value="0" name="cantidad[]" style="font-size: 14px;display: none" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-6 col-form-label form-control-label">Costo</label>
                                <div class="col-lg-6">
                                    <input class="form-control" name="costo" value="S/. 0" id="costo" onchange="vercantidad(event)" readonly=”readonly” required>
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
                            <button class="btn btn-primary btn-sm disabled" id="btnsave" style="background-color:#992e45; border-color:#6b202e;">
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
        function vercantidad() {

            var flvc = $("#flvc").val();
            var fmvc = $("#fmvc").val();
            var bdc = $("#bdc").val();
            var vldc = $("#vldc").val();
            var bvc = $("#bvc").val();

            var cantidaddis = parseInt(flvc) + parseInt(fmvc) + parseInt(bdc) + parseInt(vldc) + parseInt(bvc);


            switch (cantidaddis) {
                case 0:
                    document.getElementById("costo").value = "S/. 0";
                    break;
                case 1:
                    document.getElementById("costo").value = "S/. 150";
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
                        document.getElementById("costo").value = "S/. 390";
                    }
                    break;
            }
        }


        function toggleCheckbox(element) {
            switch (element.value) {
                case "Futsal Libre Varones":
                    if (element.checked == true) {
                        $("#flvc").css("display", "block");
                    } else {
                        $("#flvc").css("display", "none");
                    }
                    break;
                case "Voley Libre Damas":
                    if (element.checked == true) {
                        $("#vldc").css("display", "block");
                    } else {
                        $("#vldc").css("display", "none");
                    }
                    break;
                case "Basquet Varones":
                    if (element.checked == true) {
                        $("#bvc").css("display", "block");
                    } else {
                        $("#bvc").css("display", "none");
                    }

                    break;
                case "Futsal Master Varones":
                    if (element.checked == true) {
                        $("#fmvc").css("display", "block");
                    } else {
                        $("#fmvc").css("display", "none");
                    }

                    break;
                case "Basquet Damas":
                    if (element.checked == true) {
                        $("#bdc").css("display", "block");
                    } else {
                        $("#bdc").css("display", "none");
                    }

                    break;
                default:
                    alert("Recargue la página");
                    break;
            }
        }

        function reglamento(element) {
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
        }

        function nombreArchivo() {
            var fileInput = document.getElementById('file');
            var filePath = fileInput.value;
            var allowedExtensions = /(.xlsx)$/i;
            if (!allowedExtensions.exec(filePath)) {
                alert('Por favor suba el archivo que descargaste previamente, Ejem: (formato.xlsx )');
                fileInput.value = '';
                return false;
            } else {
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