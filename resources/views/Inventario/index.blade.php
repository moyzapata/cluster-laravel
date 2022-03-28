@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@section('content')
<style>
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
}
.abs-right {
  display: flex;
  align-items: right;
  justify-content: right;
}
</style>
<div class="container-sm">
    <div class="row">
        <div class="col-6 col-md-6">
            <legend>Listado de inventario</legend>
        </div>
        <div class="col-6 col-md-6 abs-right">
            <a href="inventario/create" class="btn btn-primary abs-center"><i class="bi bi-plus-square"></i></a>
        </div>
    </div>

    <table class="table table-dark">
        <thead>
            <th scope="row">Producto</th>
            <th scope="row">Descripci&oacute;n</th>
            <th scope="row">Estado</th>
            <th scope="row">Codigo</th>
        </thead>
        @foreach ($inventarios as $inventarios)
        <tbody>
            <tr class="table-active">
                <td>{{$inventarios->producto}}</td>
                <td>{{$inventarios->descripcion}}</td>
                <td>{{$inventarios->estado}}</td>
                <td>{{$inventarios->codigo}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
<script>
    
</script>
@endsection