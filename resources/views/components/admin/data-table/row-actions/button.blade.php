@props([
	'as' => 'button',
	'action' => 'show',
	'type' => 'button',
	'href' => '#',
	'text' => '',
])

@php
 $actionOptions = [
 	'show' => ['icon' => 'eye', 'color' => 'text-info', 'title' => 'Ver'],
 	'edit' => ['icon' => 'pencil', 'color' => 'text-warning', 'title' => 'Editar'],
 	'delete' => ['icon' => 'trash', 'color' => 'text-error', 'title' => 'Eliminar'],
 ];

 $icon = $actionOptions[$action]['icon'] ?? 'eye';
 $color = $actionOptions[$action]['color'] ?? 'text-info';
 $title = $actionOptions[$action]['title'] ?? 'Ver';
@endphp

<div class="tooltip" data-tip="{{ $title }}">
	<{{ $as }}
		@if($as === 'a' && $href) href="{{ $href }}" @endif
		@if($as === 'button') type="{{ $type }}" @endif
		{{ $attributes->merge(['class' => 'btn btn-sm btn-square btn-ghost']) }}
	>
		<x-app-icon :name="$icon" class="w-4 h-4 {{ $color }}" />
		@if (! empty($text))
			<span class="ml-1">{{ $text }}</span>
		@endif
	</{{ $as }}>
</div>
