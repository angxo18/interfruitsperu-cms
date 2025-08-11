@props([
	'title' => '',
	'name' => '',
	'image' => '',
	'description' => '',
])

<div class="flex flex-col bg-white border border-gray-200">
	<div>
		<img src="{{ $image }}" alt="{{ $name }}" />
	</div>
	<div class="p-4">
		<h4 class="text-xl mb-2 text-gray-700">{{ $title }}</h4>
		@if ($description !== '')
			<p class="text-sm text-gray-500">{{ $description }}</p>
		@endif
	</div>
</div>
