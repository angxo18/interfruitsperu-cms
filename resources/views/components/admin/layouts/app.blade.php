<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap"
			rel="stylesheet"
		/>
		@routes
		@stack('scripts')
		@vite(['resources/css/admin/app.css', 'resources/ts/admin/app.ts'])
		<title>{{ $title }}</title>
	</head>
	<body>
		<div
			class="flex"
			x-data="{ openSidebar: false }"
			x-init="openSidebar = window.matchMedia('(min-width: 1024px)').matches"
			x-on:keydown.window.escape="window.innerWidth < 1024 && (openSidebar = false)"
			x-cloak
		>
			<x-admin.layouts.app.sidebar :$menuCategories />
			<div
				class="bg-base-200 flex flex-col grow h-screen overflow-auto transition-all duration-300"
				x-bind:class="{ 'lg:ml-64': openSidebar }"
			>
				<x-admin.layouts.app.navbar />
				<div class="grow p-6">
					{{ $slot }}
				</div>
			</div>

			<div
				class="bg-backdrop fixed top-0 left-0 h-full w-full lg:hidden z-80"
				x-on:click="openSidebar = false"
				x-show="openSidebar"
			></div>
		</div>
	</body>
</html>
