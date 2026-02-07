@props([
	'alertClass' => 'alert alert-info',
	'title' => '',
	'alertIconType' => 'info',
	'alertIcon' => true,
	'closeButton' => true,
])

@php
 $icon = match ($alertIconType) {
 	'info' => 'info',
 	'success' => 'circle-check',
 	'warning' => 'circle-alert',
 	'error' => 'circle-x',
 	default => 'info',
 };
@endphp

<div
	x-data="{ show: true }"
	x-show="show"
	x-init="setTimeout(() => (show = false), 3000)"
	x-transition.duration.300ms
	class="toast toast-top toast-center lg:toast-end z-20 w-sm"
>
	<div class="{{ $alertClass }} flex gap-2 items-start align-baseline">
		@if ($alertIcon)
			<x-app-icon name="{{ $icon }}" class="w-5 h-5 shrink-0 inline-flex" />
		@endif

		<div class="flex flex-col grow gap-2">
			@if ($title !== '')
				<div class="font-bold">{{ $title }}</div>
			@endif

			<div>
				{{ $slot }}
			</div>
		</div>
		@if ($closeButton)
			<div>
				<button
					type="button"
					class="btn btn-xs btn-circle btn-ghost"
					x-on:click="show = false"
				>
					<x-app-icon name="x" class="w-5 h-5 shrink-0 inline-flex align-baseline" />
				</button>
			</div>
		@endif
	</div>
</div>
