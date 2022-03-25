@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Bienvenido {{Auth::user()->name}}</h3>
            </div>
        </div>
    </div>
</div>
@endsection