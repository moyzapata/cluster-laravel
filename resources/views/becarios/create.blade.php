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
        <form action="/becarios" method="POST">
            @csrf
            <legend>Formulario</legend>
            <p>Por favor, sube los documentos que se indican en los apartados siguiente, en formato PDF o PNG y rellena la informaci&oacute;n seg&uacute;n se indica</p>
            <div class="row">
                <p class="col-6 col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" require>
                </p>
                <p class="col-6 col-md-6">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="domicilio" class="form-label">Domicilio</label>
                    <input type="text" id="domicilio" name="domicilio" class="form-control" placeholder="Domicilio" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-5">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" require>
                </p>
                <p class="col-6 col-md-7">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="ine" class="form-label">Identificación oficial (INE, IFE, Pasaporte)</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="ine" type="file" class="form-control" tabindex="12" name="ine" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="contacto_emergencia" class="form-label">Contacto de emergencia</label>
                    <input type="text" id="contacto_emergencia" name="contacto_emergencia" class="form-control" placeholder="Datos de un contacto en caso de emergencia" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="escuela" class="form-label">Escuela</label>
                    <input type="text" id="escuela" name="escuela" class="form-control" placeholder="Escuela de procedencia" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="const_estudiante" class="form-label">Credencias de Estudiante</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="const_estudiante" type="file" class="form-control" name="const_estudiante" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="doc_asig_esc" class="form-label">Documento de asignacion escolar</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="doc_asig_esc" type="file" class="form-control" name="doc_asig_esc" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="nss" class="form-label">N&uacute;mero de seguro social</label>
                    <input type="text" id="nss" name="nss" class="form-control" placeholder="Número de seguro social" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="comprobante_nss" class="form-label">Comprobante de seguro social</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="comprobante_nss" type="file" class="form-control" name="comprobante_nss" require>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label>¿Cuenta ya con el esquema de vacunación completo covid?</label> 
                    <select class="form-control" name="vac_covid" require>
                        <option selected value="">Select</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="cert_vac" class="form-label">Certificado federal de vacunación covid</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="cert_vac" type="file" class="form-control" name="cert_vac">
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label>¿Tiene algún padecimiento medico que deba seguir de forna permanente?</label> 
                    <select class="form-control" name="padecimiento" require>
                        <option selected value="">Select</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </p>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </fieldset>
        </form>
    </div>
@endsection