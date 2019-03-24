<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    
    <link rel="stylesheet" href="https://materializecss.com/css/prism.css">    
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body class="paralax-demo">
    <header>
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.html" class="brand-logo center">UPeU JUEGA - INTERIGLESIAS</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="parallax-container">
            <div class="parallax">
                <img src="{{asset('/coloradmin/img/depor.jpg')}}">
            </div>
        </div>
        <div class="section white">

            <div class="row container">
                <h2 class="header center">Inscripciones</h2>
                <hr>
                <form class="col s12" style="padding: 3%;">
                    <div class="row col s5">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name" type="text" class="active validate" required autocomplete="off" />
                            <label for="name">Delegado</label>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_balance</i>
                            <input type="text" class="validate" required autocomplete="off" />
                            <label for="password">Iglesia</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate" required autocomplete="off" />
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">featured_video</i>
                            <input id="dni" type="number" class="validate" required autocomplete="off" />
                            <label for="dni">DNI</label>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">settings_cell</i>
                            <input id="celphone" type="number" class="validate" required autocomplete="off" />
                            <label for="celphone">Celular</label>
                        </div>
                    </div>
                    <div class="row offset-s1 col s6">
                        <div class="input-field col s6">
                            <p>
                                <label>
                                    <input id="flv" type="checkbox" value="Futsal Libre Varones" />
                                    <span>Futsal Libre Varones</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input id="flv" type="checkbox" value="Futsal Master Varones" />
                                    <span>Futsal Master Varones</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input id="flv" type="checkbox" value="Voley Libre Damas" />
                                    <span>Voley Libre Damas</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input id="flv" type="checkbox" value="Básquet Varones" />
                                    <span>Básquet Varones</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input id="flv" type="checkbox" value="Básquet Damas" />
                                    <span>Básquet Damas</span>
                                </label>
                            </p>

                        </div>

                        <div class="input-field col s6">
                            <p>
                                <input id="flv" type="number" value="0" />
                            </p>
                            <p>
                                <input id="flv" type="hidden" value="0" />
                            </p>
                            <p>
                                <input id="flv" type="hidden" value="0" />
                            </p>
                            <p>
                                <input id="flv" type="hidden" value="0" />
                            </p>
                            <p>
                                <input id="flv" type="hidden" value="0" />
                            </p>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">attach_money</i>
                            <input id="costo" type="text" class="validate red-text" value="S/. 600" required disabled>
                            <label for="costo">Costo</label>
                        </div>

                    </div>

                    <div class="row col s12">
                        <div class="file-field input-field">
                            <div class="btn" style="background-color: #992e45">
                                <span>Archivo</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 center">
                            <span>Descargue el formato. <a href="">Aquí</a></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 center">
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in" onchange="reglamento(this)"/>
                                    <span>Acepto haber leido el reglamento de la Copa Centenario</span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 center">
                            <a class="waves-effect waves-light btn" id="btnsave" disabled><i class="material-icons left" style="color: white !important">send</i>Registrarse</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="parallax-container">
            <div class="parallax">
                <img src="{{asset('/coloradmin/img/fondo.jpeg')}}">
            </div>
        </div>

        <footer class="page-footer docs-footer">
            <div class="container">
                <div class="row" style="margin-bottom:0">
                    <div style="display: flex">
                        <div id=""><a href="https://www.upeu.edu.pe/"><img class="" src="https://www.upeu.edu.pe/wp-content/uploads/2019/01/logo-footer-UPeU.png" srcset="https://www.upeu.edu.pe/wp-content/uploads/2019/01/logo-footer-UPeU.png 61w, https://www.upeu.edu.pe/wp-content/uploads/2019/01/logo-footer-UPeU-retina.png 126w" width="61" height="58" sizes="61px" alt="UPeU"></a></div>
                        <div class="" style="margin-left: 3%; margin-top:2%">
                            Copyright © UPeU 2019. &nbsp;Todos los derechos son reservados — Implementado by: <a href="#" style="color:#ebbb1d;">IdeasUPeU</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <button data-target="modal1" class="btn modal-trigger">Modal</button>

    <!-- Modal Trigger -->
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>    
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

    <script>            
        document.addEventListener('DOMContentLoaded', function() {
            var parallax = document.querySelectorAll('.parallax');            
            var parallaxInstances = M.Parallax.init(parallax);

            
        });

         function reglamento(element) {
            if (element.checked == true) {
                document.getElementById('btnsave').classList.remove('disabled');
                document.getElementById('btnsave').classList.add('active');
                document.getElementById('btnsave').disabled = false;
                
                var modal = document.querySelectorAll('.modal');
                var modalInstances = M.Modal.init(modal);

                //modalInstances.open(); 
            } else {
                document.getElementById('btnsave').classList.remove('active');
                document.getElementById('btnsave').classList.add('disabled');
                document.getElementById('btnsave').disabled = true;
            }
        }        
    </script>

</body>

</html> 