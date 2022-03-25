@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
.form{
    margin-left: 80px;
    margin-right: 80px;
}
</style>
@section('content')
    <div class="form">
        <form action="/profile" method="POST">
            @csrf
            <legend>Formulario</legend>
            <p>Por favor, sube los documentos que se indican en los apartados siguiente, en formato PDF o PNG y rellena la informaci&oacute;n seg&uacute;n se indica</p>
            <div class="row">
                <p class="col-6 col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" class="form-control" placeholder="Nombre" require>
                </p>
                <p class="col-6 col-md-6">
                    <label for="apellidos" class="form-label">Nombre</label>
                    <input type="text" id="apellidos" class="form-control" placeholder="Apellidos" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="domicilio" class="form-label">Domicilio</label>
                    <input type="text" id="domicilio" class="form-control" placeholder="Domicilio" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-5">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" id="telefono" class="form-control" placeholder="Telefono" require>
                </p>
                <p class="col-6 col-md-7">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="text" id="correo" class="form-control" placeholder="Correo" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="cv" class="form-label">Identificación oficial (INE, IFE, Pasaporte)</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="cv" type="file" class="form-control" tabindex="12" name="cv">
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="emergencia" class="form-label">Contacto de emergencia</label>
                    <input type="text" id="emergencia" class="form-control" placeholder="Datos de un contacto en caso de emergencia" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="escuela" class="form-label">Escuela</label>
                    <input type="text" id="escuela" class="form-control" placeholder="Escuela de procedencia" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="ine" class="form-label">Credencias de Estudiante</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="ine" type="file" class="form-control" name="ine">
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="asig" class="form-label">Documento de asignacion escolar</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="asig" type="file" class="form-control" name="asig">
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="nss" class="form-label">N&uacute;mero de seguro social</label>
                    <input type="text" id="nss" class="form-control" placeholder="Número de seguro social" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="asig" class="form-label">Comprobante de seguro social</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="compronss" type="file" class="form-control" name="compronss">
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="covid" class="form-label">¿Cuenta ya con el esquema de vacunación completo covid?</label>
                </p>
                <p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="si" id="si" checked>
                        <label class="form-check-label" for="si">
                            si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="no" id="no">
                        <label class="form-check-label" for="no">
                            no
                        </label>
                    </div>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="compro" class="form-label">Certificado federal de vacunación covid</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="compro" type="file" class="form-control" name="compro">
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="covid" class="form-label">¿Tiene algún padecimiento medico que deba seguir de forna permanente?</label>
                </p>
                <p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sipade" id="sipade" checked>
                        <label class="form-check-label" for="sipade">
                            si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nopade" id="nopade">
                        <label class="form-check-label" for="nopade">
                            no
                        </label>
                    </div>
                </p>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </fieldset>
        </form>
    </div>
@endsection