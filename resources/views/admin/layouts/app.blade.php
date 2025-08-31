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
		@stack('scripts')
		@vite(['resources/css/admin/app.css', 'resources/ts/admin/app.ts'])
		<title>@yield('title') - {{ config('app.name') }}</title>
	</head>
	<body>
		<div class="flex">
			<div
				class="bg-base-100 min-w-64 w-64 h-screen max-h-screen z-10 border-solid border-r border-base-content/5"
			></div>
			<div class="bg-base-300 flex flex-col grow h-screen w-full overflow-auto">
				<div
					class="top-0 sticky flex justify-between items-center bg-base-100 min-h-16 max-h-16 z-10"
					role="navigation"
					aria-label="Navbar"
				></div>
				<div class="grow p-6">
					@yield('main')
				</div>
			</div>
		</div>
	</body>
</html>
