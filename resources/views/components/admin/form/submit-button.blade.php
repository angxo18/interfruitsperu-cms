@props(['text' => 'Guardar'])

<button
	type="submit"
	{{ $attributes->merge(['class' => 'btn btn-sm btn-primary']) }}
>
	<x-app-icon name="check" class="w-4 h-4" />
	{{ $text }}
</button>
