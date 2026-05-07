@props(['title' => '', 'description' => ''])

<div class="px-6 pt-6 pb-3 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
	<div>
		<span class="text-xl font-medium">{{ $title }}</span>
		<p class="mt-2 text-sm text-base-content/70">{{ $description }}</p>
	</div>
	<div class="flex flex-col lg:flex-row gap-2">
		{{ $slot }}
	</div>
</div>
