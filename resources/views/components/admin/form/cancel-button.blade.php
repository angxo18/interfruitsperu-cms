@props(['text' => 'Cancelar'])

<a type="button" {{ $attributes->merge(['class' => 'btn btn-sm btn-ghost']) }}>
	<x-app-icon name="x" class="w-4 h-4" />
	{{ $text }}
</a>
