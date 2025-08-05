@php
 $images = [
 	'https://images.unsplash.com/photo-1610832958506-aa56368176cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 	'https://images.unsplash.com/photo-1463123081488-789f998ac9c4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 	'https://images.unsplash.com/photo-1602170284188-6a820463dc2b?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 ];
@endphp

@extends('web.layouts.app')

@section('scripts')
	@vite(['resources/js/web/pages/home.js'])
@endsection

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

	<div></div>
@endsection
