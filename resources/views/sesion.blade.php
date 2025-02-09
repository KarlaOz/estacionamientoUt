@extends('plantilla')
@section('title', 'Iniciar Sesión')

@section('contenido')
    <section>
        <h1 class="section-title">Iniciar Sesión</h1>
        <br>
        <div class="form-box">
            <form class="form">
                <span class="title">Inicio de Sesión</span>
                <span class="subtitle">Ingresa tus credenciales para continuar...</span>
                <div class="form-container">
                    <input type="email" class="input" placeholder="Email">
                    <input type="password" class="input" placeholder="Password">
                </div>
                <button>Iniciar Sesión</button>
            </form>
            <div class="form-section">
                <p>¿No tienes cuenta? ¡<a href="">Resgitrate</a> con tu correo institucional!</p>
            </div>
        </div>
    </section>
@endsection
