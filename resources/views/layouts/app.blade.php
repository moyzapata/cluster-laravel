<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Cluster</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="/assets/vendor/template/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="/assets/vendor/template/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/vendor/template/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<style>
.abs-center {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
}
.app-name{
    color: #fff;
    font-size: 15pt;
    font-weight: bold;
    margin-left: 25px;
}
.app-bar{
    background: #2953A6
}
</style>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue">
            <div class="sidebar-wrapper">
                <div class="abs-center logo">
                    <a href="/" class="logo-normal app-name">
                        {{env('APP_NAME','Laravel')}}
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="/home">
                        <i class="bi bi-house-door-fill" aria-hidden="true"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/proyecto">
                            <i class="bi bi-file-earmark-pdf"></i>
                            <p>Proyecto</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/empresas">
                            <i class="bi bi-building" aria-hidden="true"></i>
                            <p>Empresas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/inventario">
                            <i class="bi bi-card-checklist"></i>
                            <p>Inventario</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" style="background: #1A659C; border: none;" class="btn btn-warning btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdownMenuLink" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-person-circle"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <a href="/becarios" class="dropdown-item" >
                                        <i class="bi bi-person-fill"></i> Perfil
                                    </a>
                                    <a href="#" class="dropdown-item text-danger logout" href="{{ route('logout') }}">
                                        <i class="bi bi-box-arrow-left"></i> Salir
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                                <span>{{Auth::user()->name}}
                                    <b class="caret"></b>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                        @yield('content')
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <p class="copyright text-center">
                            Copyright ??
                            <a href="http://www.ciat.mx/portal/index.php">{{env('APP_NAME','laravel')}}</a>
                            2022
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script> -->
<script src="/assets/vendor/template/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/assets/vendor/template/js/popper.min.js" type="text/javascript"></script>
<script src="/assets/vendor/template/js/light-bootstrap-dashboard.js" type="text/javascript"></script>
<script src="/assets/vendor/template/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/main.js"></script>
@yield('js')

</html>
