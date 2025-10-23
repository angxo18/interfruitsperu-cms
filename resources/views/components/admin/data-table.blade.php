<div class="overflow-hidden overflow-x-auto">
	<table class="table">
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
