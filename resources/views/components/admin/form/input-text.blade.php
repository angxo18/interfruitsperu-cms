@props([
    'name',
    'label' => null,
    'type' => 'text',
    'value' => '',
])

@php
 $id = $attributes->get('id', $name);
@endphp

<div class="flex flex-col w-full">
	@if ($label)
		<label for="{{ $id }}" class="font-semibold mb-1">{{ $label }}</label>
	@endif

	<input
		id="{{ $id }}"
		type="{{ $type }}"
		name="{{ $name }}"
		value="{{ $value }}"
		{{ $attributes->except('id')->merge(['class' => 'input input-sm w-full mb-1']) }}
	/>

	@error($name)
		<span class="text-xs text-error">{{ $message }}</span>
	@enderror
</div>
