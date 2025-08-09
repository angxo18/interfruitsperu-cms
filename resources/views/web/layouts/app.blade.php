@php
 $menu = [
 	[
 		'url' => route('home'),
 		'name' => 'home',
 		'title' => 'Inicio',
 	],
 	[
 		'url' => route('about'),
 		'name' => 'about',
 		'title' => 'Nosotros',
 	],
 	[
 		'url' => route('products'),
 		'name' => 'products',
 		'title' => 'Productos',
 	],
 	[
 		'url' => route('services'),
 		'name' => 'services',
 		'title' => 'Servicios',
 	],
 	[
 		'url' => route('contact'),
 		'name' => 'contact',
 		'title' => 'Contacto',
 	],
 ];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="emerald">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet"
		/>

		@yield('scripts')
		@vite(['resources/css/web/app.css', 'resources/js/web/app.js'])
		<title>@yield('title') - Interfruits Perú</title>
	</head>
	<body>
		<header class="sticky top-0 z-50 bg-white shadow">
			<x-web.navbar :menu="$menu" />
		</header>

		@yield('breadcrumbs')

		<main>
			@yield('main')
		</main>
		<x-web.footer class="bg-zinc-800 text-gray-300" :menu="$menu" />
	</body>
</html>
