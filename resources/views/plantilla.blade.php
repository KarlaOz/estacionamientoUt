<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Estilos css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="estilos/login.css">

	<!-- Titulo -->
	<title>@yield("title","E-UTN")</title>
</head>
<body>
	<header>
        <a href="/login">
            <img class="login" src="imagenes/login.png" alt="imagen login">
        </a>
    </header>
    <div class="portada">
        <h2>Universidad Tecnologica de Nayarit</h2>
    </div>

	@yield('contenido')

	<footer id="contacto">
        <p>(c) 2024 Universidad Tecnológica de Nayarit. Derechos Reservados</p>
    </footer>
</body>
</html>