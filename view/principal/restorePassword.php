@extends('principal/indexparent');

@section('title','Cambio de contraseña - Kuper');
@section('content')

<div class="main2">
    <div class="container">
        <div class="content2">
            <div class="page-header text-center pt0 pb0">
                <h2>Restaurar Contraseña</h2>
            </div>

            <hr>

            <p>Ingresa tu correo electrónico y te enviaremos las instrucciones para restaurar tu contraseña.</p>

            <div class="form-group">
                <label>Correo electrónico</label>
                <input type="email" class="form-control" placeholder="Ejemplo: dsoriano@gmail.com" required="">
            </div>

            <button class="btn btn-primary min-width">Restablecer contraseña</button>

            <p class="mt20 mb0">Recuerda revisar tu bandeja de spam.</p>

        </div>

        <div class="mb30"></div>

    </div>
</div>

@endsection()