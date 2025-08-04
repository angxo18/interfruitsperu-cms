@php
 $items = [
 	[
 		'url' => route('home'),
 		'name' => 'home',
 		'title' => 'Inicio',
 	],
 	[
 		'url' => route('about'),
 		'name' => 'about',
 		'title' => 'Nosotros',
 	],
 	[
 		'url' => route('products'),
 		'name' => 'products',
 		'title' => 'Productos',
 	],
 	[
 		'url' => route('services'),
 		'name' => 'services',
 		'title' => 'Servicios',
 	],
 	[
 		'url' => route('contact'),
 		'name' => 'contact',
 		'title' => 'Contacto',
 	],
 ];
@endphp

<nav x-data="{ open: false }" class="bg-white w-full flex justify-around h-20">
	<div class="flex items-center gap-3">
		<x-lucide-globe class="w-12 h-12 text-red-500" />
		<span class="text-xl lg:text-2xl font-bold">Interfruits Perú</span>
	</div>
	<div
		class="absolute overflow-hidden top-24 lg:static lg:flex lg:items-center bg-white w-[90%] lg:w-auto lg:h-auto lg:max-h-full transition-all duration-300 lg:px-1"
		x-bind:class="open ? 'max-h-80' : 'max-h-0'"
		x-cloak
	>
		<ul class="flex flex-col lg:flex-row gap-5 p-5 lg:p-0">
			@foreach ($items as $item)
				<li>
					<a
						href="{{ $item['url'] }}"
						class="{{ request()->routeIs($item['name']) ? 'text-emerald-600' : 'text-gray-800' }} hover:text-emerald-600 transition-colors duration-300 font-semibold"
					>
						{{ $item['title'] }}
					</a>
				</li>
			@endforeach
		</ul>
	</div>
	<div class="flex items-center lg:hidden">
		<button
			class="p-2 rounded cursor-pointer hover:bg-gray-200 transition-colors duration-200"
			x-on:click="open = !open"
		>
			<x-lucide-menu class="w-6 h-6" />
		</button>
	</div>
</nav>
