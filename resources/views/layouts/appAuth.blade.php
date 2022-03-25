<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
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
        <nav class="navbar app">
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
        </nav>
        <div class="content">
            <div class="container-fluid">
                    @yield('content')
            </div>
        </div>
    </body>
</html>