@extends('errors::minimal')

@section('title', __('Not Found'))

@section('code')
<style>
    #apartado-derecho{
        text-align:center;
    }
    ul{
        text-decoration: none !important;
        list-style: none;
        color: black;
        font-weight: bold;
    }
</style>
<div id="apartado-derecho" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    <img src="../assets/images/chems.png" style="width: 200px; height: 200px;" />
</div>
@endsection

@section('message')
<div>
    <h1>ERROR 404</h1>
    <h5>Al servidor le dió anmsiedad y no encontr&oacute; lo que buscabas, <li><a href="/">Regresar al inicio</a></li></h5>
</div>
@endsection