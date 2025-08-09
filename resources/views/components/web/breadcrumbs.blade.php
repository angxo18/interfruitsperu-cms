@props([
	'title' => '',
	'breadcrumbs' => [],
])

<section
	class="relative h-40 lg:h-52 w-full bg-[url('https://plus.unsplash.com/premium_photo-1661935429798-37eaa222de28?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-center bg-cover bg-no-repeat"
>
	<div class="absolute inset-0 bg-black opacity-60"></div>
	<div class="absolute inset-0 py-6 lg:py-12 flex items-center">
		<div class="max-w-7xl mx-auto px-6 lg:px-8 flex-1">
			<h2 class="text-white text-3xl lg:text-4xl font-bold">{{ $title }}</h2>
			<ul class="flex gap-1 text-white mt-3">
				@foreach ($breadcrumbs as $breadcrumb)
					@if (! $loop->last)
						<li>
							<a
								href="{{ Route::has($breadcrumb['name']) ? route($breadcrumb['name']) : '#' }}"
								class="text-emerald-600"
							>
								{{ $breadcrumb['title'] }}
							</a>
						</li>
						<li>: :</li>
					@else
						<li>{{ $breadcrumb['title'] }}</li>
					@endif
				@endforeach
			</ul>
		</div>
	</div>
</section>
