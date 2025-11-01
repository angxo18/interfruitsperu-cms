<div class="drawer drawer-end w-auto">
	<input id="my-drawer-1" type="checkbox" class="drawer-toggle" />
	<div class="drawer-content">
		<label for="my-drawer-1" class="btn drawer-button btn-sm btn-square btn-ghost">
			<x-app-icon name="list-filter" class="w-4 h-4" />
		</label>
	</div>
	<div class="drawer-side">
		<label for="my-drawer-1" aria-label="close sidebar" class="drawer-overlay"></label>

		{{ $slot }}
	</div>
</div>
