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

		@vite(['resources/css/admin/app.css', 'resources/ts/admin/pages/auth/login.ts'])
		<title>Login - {{ config('app.name') }}</title>
	</head>
	<body>
		<div x-data="login" class="grid grid-cols-12 h-screen">
			<div class="col-span-7 xl:col-span-8 hidden lg:block bg-base-300"></div>
			<div class="col-span-12 lg:col-span-5 xl:col-span-4 bg-base-100">
				<div class="flex flex-col items-stretch p-6 lg:p-16">
					<h3 class="font-semibold text-xl text-center mt-8 text-base-content">Login</h3>
					<p class="text-sm text-center mt-2 text-base-content/70">
						Por favor ingrese sus credenciales.
					</p>

					<form
						action="{{ route('admin.login.store') }}"
						method="POST"
						class="mt-6 lg:mt-10"
						x-on:submit.prevent="handleSubmit"
						x-ref="form"
					>
						@csrf
						<div class="mb-2">
							<label
								for="email"
								class="text-sm text-base-content/80 py-2 inline-block"
							>
								Email
							</label>
							<label class="input w-full">
								<x-lucide-mail class="w-5 h-5 text-base-content/80" />
								<input
									type="email"
									id="email"
									name="email"
									class="grow"
									placeholder="Email"
									value="{{ old('email') }}"
								/>
							</label>
							@error('email')
								<p class="text-error text-xs mt-2">{{ $message }}</p>
							@enderror
						</div>
						<div class="mb-2">
							<label
								for="password"
								class="text-sm text-base-content/80 py-2 inline-block"
							>
								Contraseña
							</label>
							<label class="input w-full">
								<x-lucide-key-round class="w-5 h-5 text-base-content/80" />
								<input
									type="password"
									id="password"
									name="password"
									class="grow"
									placeholder="Contraseña"
								/>
							</label>
							@error('password')
								<p class="text-error text-xs mt-2">{{ $message }}</p>
							@enderror
						</div>

						<div class="flex justify-end mt-1">
							<a href="#" class="link link-hover text-xs">¿Olvidó su contraseña?</a>
						</div>

						<div class="mt-6">
							<button
								type="submit"
								class="btn btn-primary w-full"
								x-bind:class="{ 'btn-disabled': submitting }"
							>
								<span class="loading loading-spinner" x-show="submitting"></span>
								<span x-text="submitting ? 'Ingresando...' : 'Ingresar'"></span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
