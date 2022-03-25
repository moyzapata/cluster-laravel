@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

@section('content')
<style>
.cont{
    width: 90%;
}
.circular{
    border-radius: 50%;
    max-width: 200px;
}
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
}
.v-line{
 border-left: solid #000;
 height:100%;
 left: 90%;
 position: absolute;
}
</style>
<div style="justify-content: center; align-items: center; display: flex;">
<div class="cont">
    <div class="row">
        <div class="col-4 col-md-2">
            <img src="../assets/images/usuario.png" alt="20" class="circular">
        </div>
        <div class="col-4 col-md-1">
            <div class="v-line"></div>
        </div>
        <div class="col-4 col-md-6">
            <h2>Mi nombre</h2>
        </div>
        <div class="col-4 col-md-2">
            <a href="becarios/create" class="btn-add abs-center"><span class="bi bi-plus-circle-fill"></a>
        </div>
    </div>
</div>
</div>

@endsection