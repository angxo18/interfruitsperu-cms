@props(['indicators' => true])

@php
 $images = [
 	'https://images.unsplash.com/photo-1610832958506-aa56368176cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 	'https://images.unsplash.com/photo-1463123081488-789f998ac9c4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 	'https://images.unsplash.com/photo-1602170284188-6a820463dc2b?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
 ];
@endphp

<div
	data-carousel
	x-data="carousel()"
	class="relative w-full h-[calc(100vh-5rem)] overflow-hidden"
>
	{{-- carousel images --}}
	<div
		class="w-full h-full flex flex-nowrap transition-transform duration-500"
		:style="`transform: translateX(-${currentIndex * 100}%)`"
		x-ref="carouselItems"
	>
		{{ $slot }}
	</div>

	{{-- navigation controls --}}
	<button x-on:click="prev()" class="btn btn-soft btn-circle absolute left-4 top-1/2">
		<x-lucide-chevron-left class="w-6 h-6" />
	</button>

	<button x-on:click="next()" class="btn btn-soft btn-circle absolute right-4 top-1/2">
		<x-lucide-chevron-right class="w-6 h-6" />
	</button>

	{{-- indicators --}}
	@if ($indicators)
		<div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex space-x-2">
			<template x-for="(item, index) in count" :key="index">
				<button
					x-on:click="goTo(index)"
					:class="currentIndex === index ? 'bg-white' : 'bg-gray-500'"
					class="w-3 h-3 rounded-full focus:outline-none transition-colors cursor-pointer"
				></button>
			</template>
		</div>
	@endif
</div>
