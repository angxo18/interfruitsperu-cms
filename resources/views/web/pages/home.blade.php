@php
 $images = [
 	'https://images.unsplash.com/photo-1610832958506-aa56368176cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 	'https://images.unsplash.com/photo-1463123081488-789f998ac9c4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 	'https://images.unsplash.com/photo-1602170284188-6a820463dc2b?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 ];
@endphp

@extends('components.web.layouts.app')

@push('scripts')
	@vite(['resources/ts/web/pages/home.ts'])
@endpush

@section('title', 'Inicio')

@section('main')
	<x-web.hero-carousel class="h-[calc(100vh-5rem)]" :images="$images">
		<div class="flex flex-col items-center justify-center h-full px-10 lg:px-28">
			<h1 class="text-2xl text-white font-bold">
				Brindamos un servicio de calidad en una variedad de frutas, que va desde el proceso
				y empaque, hasta su exportación.
			</h1>

			<p class="mt-10 text-white">Mango ● Uva ● Limón Palta ● Melón ● Banano orgánico</p>
		</div>
	</x-web.hero-carousel>

	<x-web.section class="bg-white text-gray-700 text-center">
		<h3 class="text-2xl font-semibold mb-4">Best Harvesting Agriculture Company</h3>
		<p class="mb-8 text-center text-gray-500">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus accusamus
			similique tenetur cum? Atque, aliquid quos aut repudiandae placeat iste deserunt
			tempore, illo fugiat obcaecati maiores quia natus nisi quo.
		</p>
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-2">
			@for ($i = 0; $i < 3; $i++)
				<div class="flex flex-col items-center gap-1">
					<div
						class="w-20 h-20 bg-emerald-700 flex justify-center items-center rounded-full"
					>
						<x-lucide-leaf class="w-7 h-7 text-white" />
					</div>
					<h3 class="font-semibold text-xl mb-2">Lorem</h3>
					<p class="text-gray-500">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis iusto
						voluptate, provident deserunt esse atque ab soluta quibusdam, laboriosam,
						doloribus corrupti non veniam possimus maxime quos. Adipisci corrupti non
						nostrum.
					</p>
				</div>
			@endfor
		</div>
	</x-web.section>
@endsection
