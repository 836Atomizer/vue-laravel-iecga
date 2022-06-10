<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ALBARRACÍN EDUCA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/vue-spinners@1.0.0/dist/vue-spinners.css">
    <script src="https://unpkg.com/vue-spinners@1.0.0/dist/vue-spinners.browser.js"></script>

    <!-- Fonts --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            font-family: 'Ubuntu', sans-serif;
        }
        .bg-overlay {
            background: linear-gradient(rgba(255,255,255,0.97), rgba(255,255,255,.85)), url("https://w.radiouno.pe/imagenes/noticias/66162.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            
            /*height: 450px;*/
        }
        .component-fade-enter-active, .component-fade-leave-active {
            transition: opacity .6s ease;
        }
        .component-fade-enter, .component-fade-leave-to
            /* .component-fade-leave-active below version 2.1.8 */ {
            opacity: 0;
        }
        .fade-enter-active, .fade-leave-active {
            transition: opacity .5s;
        }
        .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
            opacity: 0;
        }
        .img-responsive{
            display: inline;
            height: auto;
            max-width: 100%;
            margin:0 auto;
        }
         /*CARGA DE ENTRADA*/
      .loader-page {
        position: fixed;
        z-index: 25000;
        background: rgb(255, 255, 255);
        left: 0px;
        top: 0px;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition:all .8s ease;
      }
      .loader-page::before {
        content: "";
        position: absolute;
        border: 2px solid rgb(122, 0, 0);
        width: 60px;
        height: 60px;
        border-radius: 50%;
        box-sizing: border-box;
        border-left: 2px solid rgba(50, 150, 176,0);
        border-top: 2px solid rgba(50, 150, 176,0);
        animation: rotarload 1s linear infinite;
        transform: rotate(0deg);
      }
      @keyframes rotarload {
          0%   {transform: rotate(0deg)}
          100% {transform: rotate(360deg)}
      }
      .loader-page::after {
        content: "";
        position: absolute;
        border: 2px solid rgba(247, 187, 1,.8);
        width: 60px;
        height: 60px;
        border-radius: 50%;
        box-sizing: border-box;
        border-left: 2px solid rgba(50, 150, 176, 0);
        border-top: 2px solid rgba(50, 150, 176, 0);
        animation: rotarload 4s ease-out infinite;
        transform: rotate(0deg);
      }
      /*CARGA DE ENTRADA*/
    </style>
</head>
<body>
    <div class="loader-page"></div>    
    <div id="app">
        
        <main class="">
            <div class="py-3 bg-overlay">
                <h3 class="px-5"><b><i class="bi-stack" hidden style="font-size: 1.9rem;  color: #611a14;"></i><img src="https://ie42003cgalbarracin.edu.pe/web/img/2.png" width="30"> ALBARRACÍN EDUCA</b> 
                <span class="float-right"><div><h5 class="text-center"></h5></div></span>
                <br>
                <span style="font-size: 14px;"><b>I.E. N° 42003 "CORONEL GREGORIO ALBARRACÍN"</b></span> </h3>
            </div>
            <!-- <div class="border-top border-bottom py-2" style="background-color: #611a14;">
                <nav class="navbar px-4 navbar-expand-lg navbar-dark"  >
                
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/web"><span class="nav-item-link">Inicio</span> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="identidad.php">
                                <span class="nav-item-link">Identidad</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="nav-item-link">Noticias</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="comunicados.php">
                                <span class="nav-item-link">Comunicados</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="biblioteca.php">
                                <span class="nav-item-link">Biblioteca</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="laboratorio.php">
                                <span class="nav-item-link">Laboratorio</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galeria.php">
                                <span class="nav-item-link">Galerias</span></a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div>  -->
                @yield('content')
            <div class="py-2 border-top px-5 text-white" style="background-color: black">
                <div class="row pt-3">
                    <div class="col-md-8">
                        <p>I.E. Coronel Gregorio Albarracín <br>Av. Cuzco N° 444 <br>Tacna - Perú <br>2021&copy</p>
                    </div>
                    <div class="col-md-4">
                        <p>Correo institucional de contacto:<br>
                        <span style="font-size: 14px;">mesadepartes@ie42003cgalbarracin.edu.pe</span>
                        <br>Redes sociales <br>
                        <i class="bi-facebook  "></i> <i class="bi-twitter pl-2"></i>
                        <i class="bi-youtube pl-2"></i>
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        setTimeout(function () {
            document.querySelector(".loader-page").style.cssText = 'visibility: hidden; opacity:0;';
        }, 1200);
    </script>
</body>
</html>
