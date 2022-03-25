<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cluster</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            .app{
                background: #2953A6;
            }
            .logo {
                margin-left: 50px;
            }
            .rutas{
                margin-right: 50px;
            }
            .first {
                font-family: 'Nunito', sans-serif;
                background: #2953A6;
            }
            .abs-center {
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="navbar app">
            <a class="logo" href="{{ url('/') }}">
                <img src="../assets/images/logo.png" style="width: 120px; height: 50px;" />
            </a>
            <div class="d-flex rutas">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-outline-light">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-light">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
        <div class="col first">
            <div class="row">
                <div class="col-6 col-md-6">
                    <img src="../assets/images/chems.png" style="width: 500px; height: 500px;" />
                </div>
                <div class="col-6 col-md-6">
                    <img src="../assets/images/chems.png" style="width: 500px; height: 500px;" />
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-6 abs-center">
                    <div class="col">
                        <center>
                            <h2>Visión</h2>
                            <hr>
                            <p>Ser un referente para la sociedad, la indrustria y el gobierno, temas relacionados con el desarrollo e integraci&iacute;n de soluciones tecnol&oacute;gicas de alto valor de grado</p>
                        </center>
                    </div>
                </div>
                <div class="col-6 col-md-6 abs-center">
                    <center>
                        <h2>Misión</h2>
                        <hr>
                        <p>mision</p>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>