@props([
	'menu' => [],
])

<nav
	x-data="{ open: false, scrolled: false }"
	class="bg-white max-w-7xl mx-auto px-6 lg:px-8 flex justify-between transition-all duration-300"
	x-bind:class="scrolled ? 'h-20' : 'h-[5.6rem]'"
	x-init="
     window.addEventListener('scroll', () => {
     	scrolled = window.scrollY > 50
     })
 "
>
	<div class="flex items-center gap-3">
		<x-lucide-globe class="w-12 h-12 text-red-500" />
		<span class="text-xl lg:text-2xl font-bold">Interfruits Perú</span>
	</div>
	<div
		class="absolute overflow-hidden top-24 lg:static lg:flex lg:items-center bg-white w-[90%] lg:w-auto lg:h-auto lg:max-h-full transition-all duration-300 lg:px-1 shadow lg:shadow-none"
		x-bind:class="open ? 'max-h-80' : 'max-h-0'"
		x-cloak
	>
		<ul class="flex flex-col lg:flex-row gap-5 p-5 lg:p-0">
			@foreach ($menu as $item)
				<li>
					<a
						href="{{ Route::has($item['name']) ? route($item['name']) : '#' }}"
						class="{{ request()->routeIs($item['name']) ? 'text-emerald-700' : 'text-gray-800' }} hover:text-emerald-600 transition-colors duration-300 font-semibold lg:relative lg:after:block lg:after:absolute lg:after:-bottom-1 lg:after:left-0 lg:after:h-0.5 lg:after:w-0 lg:after:bg-emerald-700 lg:after:transition-all lg:after:duration-300 lg:hover:after:w-full"
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
			<x-lucide-menu x-show="!open" class="w-6 h-6" />
			<x-lucide-x x-show="open" class="w-6 h-6" />
		</button>
	</div>
</nav>
