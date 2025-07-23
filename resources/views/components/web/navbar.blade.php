@php
 $items = [
 	[
 		'url' => route('home'),
 		'name' => 'Inicio',
 	],
 	[
 		'url' => route('about'),
 		'name' => 'Nosotros',
 	],
 	[
 		'url' => route('services'),
 		'name' => 'Servicios',
 	],
 	[
 		'url' => route('products'),
 		'name' => 'Productos',
 	],
 	[
 		'url' => route('contact'),
 		'name' => 'Contacto',
 	],
 ];
@endphp

<nav class="px-5 lg:px-28 bg-base-100" x-data="{ open: false }">
	<div class="flex justify-between items-center h-20">
		<div class="flex flex-shrink-0 items-center align-bottom space-x-2 py-3">
			<x-lucide-globe class="w-12 h-12 text-red-500" />

			<span class="font-bold text-xl lg:text-3xl inline-block">Interfruits Perú</span>
		</div>

		<!-- Botón Toggle (mobile) -->
		<div class="flex items-center lg:hidden">
			<button
				x-on:click="open = !open"
				type="button"
				class="btn btn-ghost"
				aria-controls="mobile-menu"
				aria-expanded="false"
			>
				<x-lucide-menu class="w-6 h-6" x-show="!open" />
				<x-lucide-x class="w-6 h-6" x-show="open" />
			</button>
		</div>

		<!-- Menú (desktop) -->
		<div class="px-2 hidden lg:flex gap-5">
			@foreach ($items as $item)
				<a
					href="{{ $item['url'] }}"
					class="font-semibold text-sm hover:text-primary duration-300 transition-colors text-gray-700"
				>
					{{ $item['name'] }}
				</a>
			@endforeach
		</div>
	</div>

	<!-- Menú colapsable (mobile) -->
	<div class="lg:hidden flex flex-col gap-1" x-show="open" x-transition>
		@foreach ($items as $item)
			<a
				href="{{ $item['url'] }}"
				class="block rounded-box hover:bg-base-200/30 px-3 py-2 uppercase font-semibold text-sm hover:text-primary duration-300 transition-colors"
			>
				{{ $item['name'] }}
			</a>
		@endforeach
	</div>
</nav>
