@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@section('content')
<div class="form">
    <form action="/inventario" method="POST">
        @csrf
        <legend>Agregar un producto</legend>
        <div class="row">
            <p class="col-6 col-md-6">
                <label for="producto" class="form-label">Nombre</label>
                <input type="text" id="producto" name="producto" class="form-control" placeholder="Nombre" require>
            </p>
            <p class="col-6 col-md-6">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" id="estado" name="estado" class="form-control" placeholder="estado" require>
            </p>
        </div>
        <div class="row">
            <p class="col-6 col-md-12">
                <label for="descripcion" class="form-label">Descripci&oacute;n</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </p>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        </fieldset>
    </form>
</div>
@endsection