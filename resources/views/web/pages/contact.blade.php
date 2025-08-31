@php
 $title = 'Contacto';

 $breadcrumbs = [
 	[
 		'name' => 'home',
 		'title' => 'Inicio',
 	],
 	[
 		'name' => 'contact',
 		'title' => 'Contacto',
 	],
 ];
@endphp

@extends('web.layouts.app')

@push('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@push

@section('title', $title)

@section('breadcrumbs')
	<x-web.breadcrumbs :title="$title" :breadcrumbs="$breadcrumbs" />
@endsection

@section('main')
	<x-web.section class="bg-white">
		<div class="mb-10">
			<h3 class="text-emerald-700 font-semibold text-2xl">Contáctanos</h3>
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
			<div>
				<h4 class="text-gray-700 font-semibold text-2xl mb-1">Interfruits Perú SAC</h4>
				<p>Si tiene alguna duda, comentario o sugerencia, envíenos un mensaje.</p>
				<div class="flex flex-col gap-5 mt-5">
					<div class="flex gap-2 items-center">
						<div
							class="w-10 h-10 bg-emerald-700 flex justify-center items-center rounded-full"
						>
							<x-lucide-mail class="w-5 h-5 text-white" />
						</div>
						ventas@interfruitsperu.com
					</div>
					<div class="flex gap-2 items-center">
						<div
							class="w-10 h-10 bg-emerald-700 flex justify-center items-center rounded-full"
						>
							<x-lucide-phone class="w-5 h-5 text-white" />
						</div>
						+51 123 456 789
					</div>
				</div>
			</div>
			<div>
				<form
					action="{{ route('contact.send') }}"
					method="POST"
					class="grid grid-cols-1 gap-6"
				>
					@csrf
					<div>
						<input
							type="text"
							class="w-full rounded bg-gray-100 border-2 border-gray-200 p-4 outline-emerald-600"
							name="name"
							value="{{ old('name') }}"
							placeholder="Nombre"
						/>
						@error('name')
							<span class="inline-block mt-1 text-sm text-red-500">
								{{ $message }}
							</span>
						@enderror
					</div>
					<div>
						<input
							type="email"
							class="w-full rounded bg-gray-100 border-2 border-gray-200 p-4 outline-emerald-600"
							name="email"
							value="{{ old('email') }}"
							placeholder="Email"
						/>
						@error('email')
							<span class="inline-block mt-1 text-sm text-red-500">
								{{ $message }}
							</span>
						@enderror
					</div>
					<div>
						<input
							type="text"
							class="w-full rounded bg-gray-100 border-2 border-gray-200 p-4 outline-emerald-600"
							name="phone"
							value="{{ old('phone') }}"
							placeholder="Teléfono"
						/>
						@error('phone')
							<span class="inline-block mt-1 text-sm text-red-500">
								{{ $message }}
							</span>
						@enderror
					</div>
					<div>
						<textarea
							name="message"
							class="resize-none w-full rounded bg-gray-100 border-2 border-gray-200 p-4 outline-emerald-600"
							cols="30"
							rows="5"
							placeholder="Mensaje"
						>
{{ old('message') }}</textarea
						>
						@error('message')
							<span class="inline-block mt-1 text-sm text-red-500">
								{{ $message }}
							</span>
						@enderror
					</div>
					<div>
						<div
							class="g-recaptcha"
							data-sitekey="6LeSNbYZAAAAALcjr4bpvG8OYl74IR7AEEhIDVKO"
						></div>
					</div>
					<div>
						<button
							type="submit"
							class="rounded bg-emerald-700 hover:bg-emerald-800 text-white px-5 py-3 w-full cursor-pointer transition duration-300"
						>
							Enviar
						</button>
					</div>
				</form>
			</div>
		</div>
	</x-web.section>
@endsection
