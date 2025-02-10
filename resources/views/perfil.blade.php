@extends('plantilla')
@section('estilos')
<link rel="stylesheet" type="text/css" href="estilos/perfil.css">
@endsection
@section('title', 'Perfil - UTN')
@section('encabezado','Perfil de usuario')
@section('contenido')
<div class="perfilcard">
    <table>
        <tr>
    <td>
        <img class="fotoperfil" src="imagenes/perfil-del-usuario.png" alt="imagen del usuario">
    </td>
            <td>
               <p>Nombre:</p>
                <label class="personalizado"></label>

                <p>Serie matricula:</p>
                <label class="personalizado"></label>

                <p>Tipo de usuario:</p>
                <label class="personalizado"></label>

                <p>Correo electronico:</p>
                <label class="personalizado"></label>
             </td>
            </tr>
    </table>
</div>
@endsection