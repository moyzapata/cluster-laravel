@extends('layouts.appAuth')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
.form{
    margin-left: 250px;
    margin-right: 250px;
}
</style>

@section('content')
    <div class="form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <legend>Formulario</legend>
            <p>Por favor, sube los documentos que se indican en los apartados siguiente, en formato PDF o PNG y rellena la informaci&oacute;n seg&uacute;n se indica</p>
            <div class="row">
                <p class="col-6 col-md-6">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" require autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
                <p class="col-6 col-md-6">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" placeholder="Apellidos" require autocomplete="apellidos" autofocus>
                    @error('apellidos')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="domicilio" class="form-label">Domicilio</label>
                    <input type="text" id="domicilio" name="domicilio" class="form-control @error('apellidos') is-invalid @enderror" placeholder="Domicilio" require autocomplete="domicilio" autofocus>
                    @error('domicilio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-5">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" id="telefono" name="telefono" class="form-control @error('telefono') is-invalid @enderror" placeholder="Telefono" require autocomplete="telefono" autofocus>
                    @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
                <p class="col-6 col-md-7">
                    <label for="email" class="form-label">Correo</label>
                    <input type="text" id="email" name="email" class="form-control @error('apellidos') is-invalid @enderror" placeholder="Correo" require autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="ine" class="form-label">Identificación oficial (INE, IFE, Pasaporte)</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="ine" type="file" class="form-control @error('ine') is-invalid @enderror" tabindex="12" name="ine" require>
                    @error('ine')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="contacto_emergencia" class="form-label">Contacto de emergencia</label>
                    <input type="text" id="contacto_emergencia" name="contacto_emergencia" class="form-control @error('contacto_emergencia') is-invalid @enderror" placeholder="Datos de un contacto en caso de emergencia" require autocomplete="contacto_emergencia" autofocus>
                    @error('contacto_emergencia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="escuela" class="form-label">Escuela</label>
                    <input type="text" id="escuela" name="escuela" class="form-control @error('escuela') is-invalid @enderror" placeholder="Escuela de procedencia" require autocomplete="escuela" autofocus>
                    @error('escuela')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="const_estudiante" class="form-label">Credencias de Estudiante</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="const_estudiante" type="file" class="form-control @error('const_estudiante') is-invalid @enderror" name="const_estudiante" require>
                    @error('const_estudiante')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="doc_asig_esc" class="form-label">Documento de asignacion escolar</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="doc_asig_esc" type="file" class="form-control @error('doc_asig_esc') is-invalid @enderror" name="doc_asig_esc" require autocomplete="doc_asig_esc" autofocus>
                    @error('doc_asig_esc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label for="nss" class="form-label">N&uacute;mero de seguro social</label>
                    <input type="text" id="nss" name="nss" class="form-control @error('nss') is-invalid @enderror" placeholder="Número de seguro social" require autocomplete="nss" autofocus>
                    @error('nss')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="comprobante_nss" class="form-label">Comprobante de seguro social</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="comprobante_nss" type="file" class="form-control @error('comprobante_nss') is-invalid @enderror" name="comprobante_nss" require>
                    @error('comprobante_nss')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label>¿Cuenta ya con el esquema de vacunación completo covid?</label> 
                    <select class="form-control @error('vac_covid') is-invalid @enderror" name="vac_covid" require>
                        <option selected value="">Select</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                    @error('vac_covid')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-4">
                    <label for="cert_vac" class="form-label">Certificado federal de vacunación covid</label>
                </p>
                <p class="col-6 col-md-8">
                    <input id="cert_vac" type="file" class="form-control @error('cert_vac') is-invalid @enderror" name="cert_vac">
                    @error('cert_vac')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-12">
                    <label>¿Tiene algún padecimiento medico que deba seguir de forna permanente?</label> 
                    <select class="form-control @error('padecimiento') is-invalid @enderror" name="padecimiento" require>
                        <option selected value="">Select</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                    @error('padecimiento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <p class="col-6 col-md-6">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" require autocomplete="password" autofocus>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
                <p class="col-6 col-md-6">
                    <label for="password-confirm" class="form-label">Confirmar contraseña</label>
                    <input type="password" id="password-confirm" name="password-confirm" class="form-control @error('password-confirm') is-invalid @enderror" placeholder="Confirmar contraseña" require autocomplete="password-confirm" autofocus>
                    @error('password-confirm')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </p>
            </div>
            <div class="row">
                <div class="col-6 col-md-12">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
            </fieldset>
        </form>
    </div>
@endsection
