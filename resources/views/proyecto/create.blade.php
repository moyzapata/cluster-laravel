@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

@section('content')
<div class="form">
    <form action="/proyecto" method="POST">
        @csrf
        <legend>Crear proyecto</legend>
        <div class="row">
            <p class="col-6 col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" require>
            </p>
            <p class="col-6 col-md-6">
                <label>Estado</label> 
                <select class="form-control" name="estado">
                    <option value="Progreso">Progreso</option>
                    <option value="Completo">Completo</option>
                </select>
            </p>
        </div>
        <div class="row">
            <p class="col-6 col-md-4">
                <label for="documento" class="form-label">Documento en pdf</label>
            </p>
            <p class="col-6 col-md-8">
                <input id="documento" type="file" class="form-control" name="documento" require>
            </p>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </fieldset>
    </form>
</div>
@endsection