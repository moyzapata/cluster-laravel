@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@section('content')
<style>
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
<div class="container">
    <a href="inventario/create"><span class="bi bi-plus-circle-fill"></a>
</div>
<div class="container-sm">
    <legend>Listado de inventario</legend>

    <table class="table table-dark">
        <thead>
            <th scope="row">Producto</th>
            <th scope="row">Descripci&oacute;n</th>
            <th scope="row">Estado</th>
            <th scope="row">Codigo</th>
        </thead>
        @foreach ($inventario as $inventario)
        <tbody>
            <tr class="table-active">
                <td>{{$inventario->producto}}</td>
                <td>{{$inventario->descripcion}}</td>
                <td>{{$inventario->estado}}</td>
                <td>{{$inventario->codigo}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection