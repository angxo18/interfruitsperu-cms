@props([
	'menu' => [],
])

<footer {{ $attributes->merge(['class' => 'py-10']) }}>
	<div class="max-w-7xl mx-auto px-6 lg:px-8">
		<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
			<!-- Logo y descripción -->
			<div>
				<h2 class="text-xl font-bold text-white mb-2">Interfruits Perú</h2>
				<p class="text-sm">
					Calidad que cruza fronteras. Exportamos frutas frescas y ofrecemos servicios de
					empacado desde nuestras sedes en Perú.
				</p>
			</div>

			<!-- Enlaces del sitio -->
			<div>
				<h3 class="text-lg font-semibold text-white mb-4">Navegación</h3>
				<ul class="space-y-2 text-sm">
					@foreach ($menu as $item)
						<li>
							<a
								href="{{ Route::has($item['name']) ? route($item['name']) : '#' }}"
								class="hover:text-white"
							>
								{{ $item['title'] }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>

			<!-- Sedes de produccion -->
			<div>
				<h3 class="text-lg font-semibold text-white mb-4">Sedes de producción</h3>
				<p class="text-sm mb-3">
					<x-lucide-map-pin class="w-5 h-5 inline-block text-gray-200" />
					<span class="font-semibold">Tambo Grande:</span>
					Carretera Tambo Grande - Las Lomas Km. 1078 + 030, Tambo Grande - Piura, Perú
				</p>
				<p class="text-sm mb-3">
					<x-lucide-map-pin class="w-5 h-5 inline-block text-gray-200" />
					<span class="font-semibold">Sullana:</span>
					Carretera Tambo Grande RRCC 418 No. 95 Cas. Huangala, Sullana-Piura, Perú
				</p>
			</div>

			<!-- Información de contacto -->
			<div>
				<h3 class="text-lg font-semibold text-white mb-4">Contáctanos</h3>
				<p class="text-sm mb-3">
					<x-lucide-phone class="w-5 h-5 mr-1 inline-block text-gray-200" />
					+51 123 456 789
				</p>
				<p class="text-sm mb-4">
					<x-lucide-mail class="w-5 h-5 mr-1 inline-block text-gray-200" />
					contacto@frutalexport.com
				</p>
				<div class="flex space-x-4">
					<a href="#" class="hover:text-white" aria-label="Facebook">
						<svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
							<path
								d="M22 12.07C22 6.477 17.523 2 12 2S2 6.477 2 12.07c0 5.012 3.657 9.161 8.438 9.879v-6.99H7.898v-2.889h2.54V9.797c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562v1.875h2.773l-.443 2.889h-2.33v6.99C18.343 21.231 22 17.082 22 12.07z"
							/>
						</svg>
					</a>
					<a href="#" class="hover:text-white" aria-label="Instagram">
						<svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
							<path
								d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zM4 7.75A3.75 3.75 0 0 1 7.75 4h8.5A3.75 3.75 0 0 1 20 7.75v8.5A3.75 3.75 0 0 1 16.25 20h-8.5A3.75 3.75 0 0 1 4 16.25v-8.5zM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm4.5-.25a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5z"
							/>
						</svg>
					</a>
					<a href="#" class="hover:text-white" aria-label="LinkedIn">
						<svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
							<path
								d="M19 0h-14C2.69 0 1 1.69 1 3.75v16.5C1 22.31 2.69 24 4.75 24h14.5C21.31 24 23 22.31 23 20.25V3.75C23 1.69 21.31 0 19.25 0zm-11.6 20H4.8V9h2.6v11zm-1.3-12.3c-.83 0-1.5-.67-1.5-1.5S5.27 4.7 6.1 4.7s1.5.67 1.5 1.5S6.93 7.7 6.1 7.7zM20 20h-2.6v-5.6c0-1.33-.03-3.03-1.85-3.03-1.85 0-2.13 1.44-2.13 2.93V20H10.8V9h2.5v1.5h.04c.35-.66 1.2-1.35 2.48-1.35 2.65 0 3.14 1.74 3.14 4v6.85z"
							/>
						</svg>
					</a>
				</div>
			</div>
		</div>

		<!-- Línea inferior -->
		<div class="border-t border-gray-400 mt-8 pt-4 text-center text-sm text-gray-400">
			&copy; 2025 Interfruits Perú. Todos los derechos reservados.
		</div>
	</div>
</footer>
