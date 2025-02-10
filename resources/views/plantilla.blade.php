<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Estilos css -->
	@yield('estilos')
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="estilos/login.css">

	<!-- Titulo -->
	<title>@yield("title","E-UTN")</title>
</head>
<body>
	<header class="header_plantilla">
		<div class="header-left">
			<img src="imagenes/logout.webp" alt="Logo">
		</div>
		<div class="header-center">
			<h1>@yield('encabezado','encabezado')</h1>
		</div>
	</header>
	<section>
		@yield('contenido')
	</section>
	<footer id="contacto">
        <p>(c) 2024 Universidad Tecnológica de Nayarit. Derechos Reservados</p>
    </footer>
</body>
</html>