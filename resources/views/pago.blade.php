<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagar - Copa Centenario UPeU</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{asset('favicon.ico')}}" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</head>

<body style="background: url({{asset('/coloradmin/img/depor.jpg')}}) no-repeat center center fixed;background-size: cover;">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-sm-4 card" style="font-size: 14px; margin-top: 5%; margin-bottom: 10%;  background-color: rgba(255, 255, 255, 0.85) !important;">
                        <div class="card-header">
                            <h4>Datos de la Inscripción</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="col-sm-6 col-form-label col-form-label-md">Nombre del Delegado</h4>
                            <input class="form-control form-control-sm" type="text" value="{{$pago->nombre}} {{$pago->paterno}} {{$pago->materno}}" readonly="readonly" id="delegado">
                            <h4 class="col-sm-6 col-form-label col-form-label-md">Iglesia</h4>
                            <input class="form-control form-control-sm" type="text" value="{{$pago->iglesia}}" readonly="readonly">
                            <h4 class="col-sm-6 col-form-label col-form-label-md">Disciplinas</h4>
                            <input type="text" class="form-control form-control-sm" value="{{$pago->disciplina}}" readonly="readonly">
                            <h4 class="col-sm-6 col-form-label col-form-label-md">Costo</h4>
                            <input type="text" class="form-control form-control-sm" value="S/. {{$pago->costo}}" readonly="readonly">
                            <input type="hidden" value="{{$pago->dni}}" id="dni">
                        </div>

                        <div class="tab-content">
                            <div class="text-left tab-pane fade active show" id="tab">
                                <p style="text-align: center">Verifica que tus datos sean correctos, antes de efectuar el pago.</p>
                            </div>
                            <form id="formVisa" name="formVisa" method="POST" action="https://api-lamb.upeu.edu.pe/visa/tokens" target="visaFrame">
                                <input type="hidden" name="tipodoc" value="1" autocomplete="off">
                                <input type="hidden" name="nombre" value="" autocomplete="off">
                                <input type="hidden" name="paterno" value="" autocomplete="off">
                                <input type="hidden" name="materno" value="" autocomplete="off">
                                <input type="hidden" name="sexo" value="" autocomplete="off">
                                <input type="hidden" name="correo" value="{{$pago->correo}}" autocomplete="off">
                                <input type="hidden" name="numdoc" value="{{$pago->delegado}}" autocomplete="off">
                                <input type="hidden" name="id_operacion" value="624" autocomplete="off">
                                <input type="hidden" name="tokens" value="$2y$10$jfeV4ewDnkHjilscOvy5h.sAYBwEzfJgFbnl3Asd0FvUcTOs6EZxu" autocomplete="off">
                                <input type="hidden" name="id_negocio" value="1" autocomplete="off">
                                <input type="hidden" name="id_origen" value="{{$pago->id}}" autocomplete="off">
                                <input type="hidden" name="id_aplicacion" value="12" autocomplete="off">
                                <input type="hidden" name="moneda" value="0" autocomplete="off">
                                <input type="hidden" name="importe" id="importe" value="{{$pago->costo}}" autocomplete="off">
                                <button type="button" onclick="enviar()" class=" btn btn-primary btn-lg" style="background-color: #731027; border-color: #731027;float:left">Pagar</button>
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalvoucher" style="background-color: #731027; border-color: #731027; float: right">Subir voucher</button>
                            </form>

                        </div>
                    </div>
                    <div class="modal fade" tabindex="-1" id="modalvisa" role="dialog" aria-hidden="true" aria-labelledby="modalcontrollabel">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalcontrollabel">Pagos Visa </h5>
                                    <button type="button" class="close" aria-hidden="true" onclick="fncerrarmodalvisa()">x</button>
                                </div>

                                <div class="modal-body">
                                    <iframe name="visaFrame" width="100%" height="750"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modalvoucher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Subir Voucher</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form accept-charset="UTF-8" action="{{route('voucher')}}" method="POST" enctype="multipart/form-data" id="form" onsubmit="msg()">
                                <div class="modal-body">

                                    @csrf
                                    <input type="hidden" id="nombrepago" name="nombrepago">
                                    <input type="hidden" id="dnipago" name="dnipago">
                                    <div class="form-group row">
                                        <div class="mx-auto col-lg-11">
                                            <h4 class="col-sm-6 col-form-label col-form-label-md">N° de Operación</h4>
                                            <input type="text" class="form-control form-control-sm" name="operacion">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="mx-auto col-lg-11">
                                            <h4 class="col-sm-6 col-form-label col-form-label-md">Fecha</h4>
                                            <input type="date" class="form-control form-control-sm" name="fecha">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <h4 class="col-sm-6 col-form-label col-form-label-md" style="margin-left: 11%">Voucher</h4>
                                        <div class="mx-auto col-lg-10">
                                            <label for="file" class="custom-file-label" id="archivo">Subir voucher de pago</label>
                                            <input class="custom-file-input" type="file" name="file" id="file" lang="en" onchange="nombreArchivo()" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-lg" style="background-color: #731027; border-color: #731027; float: right">Subir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modalmsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Subir Voucher</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Su voucher se analizara en breves momentos</p>
                            </div>
                            <div class="modal-footer">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#nombrepago").val($("#delegado").val());
                        $("#dnipago").val($("#dni").val());
                    })
                    $("#target").submit(function(event) {
                        event.preventDefault();
                    });

                    function msg() {                        
                        alert("Se verificará el voucher enviado y en breve confirmaremos su inscripción. Gracias");
                        //$('#modalmsg').modal('show');
                    }

                    function enviar() {
                        var importev = document.getElementById('importe').value;
                        if (importev.length == 0) {
                            alert("Ingrese un valor mayor a 0");
                            return true;
                        } else if (importev <= 0) {
                            alert("Ingrese un valor mayor a 0");
                            return true;
                        } else {
                            document.formVisa.submit();
                            fnabrirvisa();
                        }
                    }

                    function fnmodalvisa() {
                        $('#modalvisa').modal({
                            show: true,
                            backdrop: "static",
                            keyboard: false
                        });
                    }

                    function fncerrarmodalvisa() {
                        $.ajax({
                            type: "POST",
                            url: '{{route ('verificarestadopago')}}',
                            data: {
                                id_origen: "{{$pago->id}}",
                                _token: '{{csrf_token()}}'
                            },
                            success: function(status) {
                                console.log(status);
                                if (status === "inscrito") {
                                    windows.location = '{{ route('home')}}';
                                }
                            }
                        })
                        $("#modalvisa").modal("hide");

                    }

                    function fnabrirvisa() {
                        var frm = $("#frmpagosvisa");
                        //alert(frm);
                        if (frm) {
                            frm.submit();
                        }
                        fnmodalvisa();
                    }

                    function nombreArchivo() {
                        var fileInput = document.getElementById('file');
                        var filePath = fileInput.value;
                        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                        if (!allowedExtensions.exec(filePath)) {
                            alert('Por favor suba el archivo que descargaste previamente, Ejem: (formato.xlsx )');
                            fileInput.value = '';
                            return false;
                        } else {

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
            </div>
            <!--/div-->
        </div>
    </div>
</body>

</html> 