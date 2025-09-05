@props([
	'name' => '',
	'class' => 'w-5 h-5',
])

<x-dynamic-component :component="'lucide-' . $name" :class="$class" :attributes="$attributes" />
