<div class="card bg-base-100 border border-base-300">
	@isset($header)
		{{ $header }}
	@endisset

	<div class="card-body">
		{{ $slot }}
	</div>
</div>
