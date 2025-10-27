@props([
    'paginator',
])

@php
 $window = Illuminate\Pagination\UrlWindow::make($paginator);

 $elements = array_filter([
 	$window['first'],
 	is_array($window['slider']) ? '...' : null,
 	$window['slider'],
 	is_array($window['last']) ? '...' : null,
 	$window['last'],
 ]);
@endphp

@if ($paginator->hasPages())
	<div class="flex flex-col gap-1 items-center lg:flex-row lg:justify-between lg:items-end">
		<div class="flex flex-col gap-1 items-center lg:items-start">
			<div>
				<p>
					<span>Mostrando</span>

					@if ($paginator->firstItem())
						<span class="font-medium">{{ $paginator->firstItem() }}</span>
						<span>a</span>
						<span class="font-medium">{{ $paginator->lastItem() }}</span>
					@else
						{{ $paginator->count() }}
					@endif
					<span>de</span>
					<span class="font-medium">{{ $paginator->total() }}</span>
					<span>resultados</span>
				</p>
			</div>

			<div class="join flex-wrap">
				{{-- Botón "Primero" --}}
				@if ($paginator->onFirstPage())
					<a href="#" class="join-item btn btn-sm btn-disabled">
						<x-app-icon name="chevrons-left" class="w-4 h-4" />
					</a>
				@else
					<a href="{{ $paginator->url(1) }}" class="join-item btn btn-sm">
						<x-app-icon name="chevrons-left" class="w-4 h-4" />
					</a>
				@endif

				{{-- Botón "Anterior" --}}
				@if ($paginator->onFirstPage())
					<a href="#" class="join-item btn btn-sm btn-disabled">
						<x-app-icon name="chevron-left" class="w-4 h-4" />
					</a>
				@else
					<a href="{{ $paginator->previousPageUrl() }}" class="join-item btn btn-sm">
						<x-app-icon name="chevron-left" class="w-4 h-4" />
					</a>
				@endif

				{{-- Números de página --}}
				@foreach ($elements as $element)
					{{-- "Three Dots" Separator --}}
					@if (is_string($element))
						<span class="join-item btn btn-sm btn-disabled">
							<x-app-icon name="ellipsis" class="w-4 h-4" />
						</span>
					@endif

					{{-- Array Of Links --}}
					@if (is_array($element))
						@foreach ($element as $page => $url)
							@if ($page == $paginator->currentPage())
								<span
									aria-current="page"
									class="join-item btn btn-sm btn-active cursor-default"
								>
									{{ $page }}
								</span>
							@else
								<a href="{{ $url }}" class="join-item btn btn-sm">{{ $page }}</a>
							@endif
						@endforeach
					@endif
				@endforeach

				{{-- Botón "Siguiente" --}}
				@if ($paginator->hasMorePages())
					<a href="{{ $paginator->nextPageUrl() }}" class="join-item btn btn-sm">
						<x-app-icon name="chevron-right" class="w-4 h-4" />
					</a>
				@else
					<span class="join-item btn btn-sm btn-disabled">
						<x-app-icon name="chevron-right" class="w-4 h-4" />
					</span>
				@endif

				{{-- Botón "Último" --}}
				@if ($paginator->hasMorePages())
					<a
						href="{{ $paginator->url($paginator->lastPage()) }}"
						class="join-item btn btn-sm"
					>
						<x-app-icon name="chevrons-right" class="w-4 h-4" />
					</a>
				@else
					<span class="join-item btn btn-sm btn-disabled">
						<x-app-icon name="chevrons-right" class="w-4 h-4" />
					</span>
				@endif
			</div>
		</div>

		<div class="flex items-center gap-1">
			<span>Filas:</span>
			<select class="select select-sm w-16">
				@foreach (App\Helpers\Admin\PaginationHelper::availableSizes() as $size)
					<option value="{{ $size }}">{{ $size }}</option>
				@endforeach
			</select>
		</div>
	</div>
@endif
