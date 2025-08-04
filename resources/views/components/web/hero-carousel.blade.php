@props([
	'images' => [],
])

<div
	x-data="heroCarousel"
	{{ $attributes->merge(['class' => 'relative w-full overflow-hidden']) }}
>
	@foreach ($images as $k => $image)
		<img
			src="{{ $image }}"
			class="absolute inset-0 object-cover w-full h-full transition-opacity duration-500 ease-in-out"
			x-bind:class="{{ $k }} === current ? 'opacity-100' : 'opacity-0'"
			alt="image"
		/>
		<div class="absolute inset-0 bg-black opacity-20"></div>
	@endforeach

	<div class="absolute inset-0">
		{{ $slot }}
	</div>

	<!-- Botones -->
	<div
		class="hidden absolute top-1/2 left-0 right-0 lg:flex lg:justify-between px-4 -translate-y-1/2"
	>
		<button
			x-on:click="prev"
			class="bg-black/40 hover:bg-black/60 text-white p-2 rounded-full transition cursor-pointer"
			aria-label="Anterior"
		>
			<x-lucide-chevron-left class="w-6 h-6" />
		</button>
		<button
			x-on:click="next"
			class="bg-black/40 hover:bg-black/60 text-white p-2 rounded-full transition cursor-pointer"
			aria-label="Siguiente"
		>
			<x-lucide-chevron-right class="w-6 h-6" />
		</button>
	</div>

	<!-- Indicadores -->
	<div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-2">
		@foreach ($images as $k => $image)
			<span
				x-on:click="goTo({{ $k }})"
				x-bind:class="{{ $k }} === current ? 'bg-white' : 'bg-white/50'"
				class="w-3 h-3 rounded-full cursor-pointer transition-all"
			></span>
		@endforeach
	</div>
</div>
