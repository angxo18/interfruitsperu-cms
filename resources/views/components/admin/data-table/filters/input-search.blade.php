<label class="input input-sm w-full lg:w-auto">
	<x-app-icon name="search" class="w-4 h-4" />
	<input
		type="search"
		{{ $attributes->merge(['class' => 'grow']) }}
	/>
</label>
