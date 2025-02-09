@extends('plantilla')
@section('title', 'Inicia Sesion')

@section('encabezado','Iniciar sesion')

@section('contenido')
    <div class="form-box">
        <form class="form">
            <img src="imagenes/login.png" class="lg_login">
            <span class="subtitle">Ingresa tus credenciales para continuar</span>
            <div class="form-container">
                <input type="email" class="input" placeholder="Email">
                <input type="password" class="input" placeholder="Password">
            </div>
            <button>Iniciar Sesion</button>
        </form>
        <div class="form-section">
            <p>¿No tienes cuenta? <a href="">Resgitrate</a> con tu correo institucional</p>
        </div>
    </div>
@endsection
