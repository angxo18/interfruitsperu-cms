<!DOCTYPE html>
<html lang="es" data-theme="emerald">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/web/app.css', 'resources/js/web/app.js'])
	<title>@yield('title') - Intefruits Perú</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('about') }}">Sobre Nosotros</a>
        <a href="{{ route('services') }}">Servicios</a>
        <a href="{{ route('products') }}">Productos</a>
        <a href="{{ route('contact') }}">Contacto</a>
    </nav>
    <main>
        @yield('main')
    </main>
</body>
</html>