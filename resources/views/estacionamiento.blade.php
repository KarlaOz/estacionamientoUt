@extends('plantilla')
@section('estilos')
<link rel="stylesheet" type="text/css" href="estilos/estacionamientos.css">
@endsection
@section('title', 'Estacionamientos - UTN')
@section('encabezado','Estacionamientos')
@section('contenido')
<section>
    <div class="div1">
        <p>Estudiantes</p>
             <div class="div2">
                <img src="imagenes/alumnos.png" alt="Imagen estudiantes">
            </div>
    </div>

    <div class="div1">
        <p>Visitantes</p>
        <div class="div2">
            <img src="imagenes/visitantes.png" alt="Imagen visitantes">
        </div>
    </div>

    <div class="div1">
        <p>Administrativos</p>
        <div class="div2">
        <img src="imagenes/administrativos.png" alt="Imagen administrativos">
        </div>
    </div> 

    <div class="div1">
        <p>Docentes</p>
        <div class="div2">
            <img src="imagenes/docentes.png" alt="Imagen docentes">
        </div>
    </div>
</section>
@endsection