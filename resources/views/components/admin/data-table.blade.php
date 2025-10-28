@props([
	'tableZebra' => false,
])

<div class="overflow-x-auto p-1">
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
