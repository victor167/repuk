@extends('principal/indexparent');

@section('title','Cambio de Email - Kuper');
@section('content')

<div class="main2">
    <div class="container">
        <div class="content2">
            <div class="page-header text-center pt0 pb0">
                <h2>Cambiar Correo Electrónico</h2>
                <hr>
            </div>

            <div class="form-group">
                <label>E-mail actual</label>
                <input type="email" class="form-control" required="" value="dstiwardsoriano@gmail.com">
            </div>

            <div class="form-group">
                <label>Nuevo E-mail</label>
                <input type="email" class="form-control" required="" >
            </div>

            <div class="form-group">
                <label>Confirma tu nuevo E-mail</label>
                <input type="email" class="form-control" required="">
            </div>

            <div class="form-group">
                <label>Contraseña actual</label>
                <input type="password" class="form-control" required="">
            </div>

            <div class="form-group">
                <div class="note">
                    <p class="i-alert"> Una vez confirme esta acción, recibirá un mensaje en su correo electrónico con la confirmación del cambio, y este deberá ser su nuevo correo electrónico para ingresar a su cuenta.</p>
                </div>
            </div>

            <button class="btn btn-primary min-width">Confirmar cambio de E-mail</button>

        </div>

        <div class="mb30"></div>

    </div>
</div>

@endsection()