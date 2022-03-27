@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

@section('content')
<style>
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
}
.add{
    display: flex;
    align-items: left;
    justify-content: left;
}
</style>
<div class="add">
    <a href="proyecto/create" class="btn-add abs-center"><i class="bi bi-plus-circle-fill">  {{ __('Crear un nuevo proyecto') }}</i></a>
</div>
<div class="container-sm abs-center">
    @foreach ($proyecto as $proyecto)
    <div class="row">
        <h1>Proyecto: {{$proyecto->nombre}}</h1>
        <h4>Estado: {{$proyecto->estado}}</h4>
        <!-- <a target="_blank" href="pdf?{{$proyecto->documento}}">PDF</a> -->
    </div>
    @endforeach
</div>
@endsection