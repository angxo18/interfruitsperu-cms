<!DOCTYPE html>
<html lang="es" data-theme="emerald">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		@yield('scripts')
		@vite(['resources/css/web/app.css', 'resources/js/web/app.js'])
		<title>@yield('title') - Intefruits Perú</title>
	</head>
	<body>
		<header class="sticky top-0 z-50">
			<x-web.navbar />
		</header>
		<main>
			@yield('main')
		</main>
		<footer></footer>
	</body>
</html>
