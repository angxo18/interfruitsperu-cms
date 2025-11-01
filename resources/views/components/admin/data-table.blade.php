@props([
	'tableZebra' => false,
])

<div class="flex flex-col gap-1 lg:flex-row lg:justify-between lg:items-center">
	<div class="flex flex-col lg:flex-row gap-1">
		@isset($actions)
			{{ $actions }}
		@endisset
	</div>

	<div class="flex items-center gap-1">
		@isset($filters)
			{{ $filters }}
		@endisset
	</div>
</div>

<div class="overflow-x-auto">
	<table class="table @if($tableZebra) table-zebra @endif">
		@isset($thead)
			<thead>
				{{ $thead }}
			</thead>
		@endisset

		<tbody>
			{{ $slot }}
		</tbody>
	</table>
</div>

@isset($pagination)
	{{ $pagination }}
@endisset
