@props([
	'tableZebra' => false,
])

<div class="overflow-x-auto">
	<table class="table @if($tableZebra) table-zebra @endif">
		@isset($head)
			<thead>
				{{ $head }}
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
