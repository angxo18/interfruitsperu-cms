@props([
	'label' => '',
])

<div class="flex flex-col gap-1" x-data x-id="['filter-input-text']">
	@if ($label)
		<label :for="$id('filter-input-text')">{{ $label }}:</label>
	@endif

	<input
		type="text"
		autocomplete="off"
		:id="$id('filter-input-text')"
		{{ $attributes->merge(['class' => 'input input-sm grow']) }}
	/>
</div>
