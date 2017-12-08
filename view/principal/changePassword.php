@extends('principal/indexparent');

@section('title','Cambio de contraseña - Kuper');
@section('content')
<div class="main2">
    <div class="container">
        <div class="content2">
            <div class="page-header text-center pt0 pb0">
                <h2>Cambiar Contraseña</h2>
                <hr>
            </div>

            <div class="form-group">
                <label>Contraseña actual</label>
                <input type="password" class="form-control" required="">
            </div>

            <div class="form-group">
                <label>Contraseña nueva</label>
                <input type="password" class="form-control" required="">
            </div>

            <div class="form-group">
                <label>Confirma tu nueva contraseña</label>
                <input type="password" class="form-control" required="">
            </div>

            <button class="btn btn-primary min-width">Guardar cambios</button>

        </div>

        <div class="mb30"></div>

    </div>
</div>

@endsection()