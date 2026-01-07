<div class="drawer drawer-end w-auto" x-data x-id="['filter-drawer']">
	<input :id="$id('filter-drawer')" type="checkbox" class="drawer-toggle" />
	<div class="drawer-content">
		<label :for="$id('filter-drawer')" class="btn drawer-button btn-sm btn-square btn-ghost">
			<x-app-icon name="list-filter" class="w-4 h-4" />
		</label>
	</div>
	<div class="drawer-side">
		<label
			:for="$id('filter-drawer')"
			aria-label="close sidebar"
			class="drawer-overlay"
		></label>

		<div class="flex flex-col bg-base-200 min-h-full w-80">
			<div class="pl-1 pt-1">
				<label :for="$id('filter-drawer')" class="btn btn-sm btn-circle btn-ghost">
					<x-app-icon name="x" class="w-5 h-5" />
				</label>
			</div>

			<div class="p-4">
				<h2 class="text-xl text-base-content font-medium mb-5">Filtros</h2>
				<form
					class="flex flex-col gap-5"
					method="GET"
					x-on:submit.prevent="$dispatch('data-table:filters-submitted')"
				>
					<div class="flex flex-col gap-3">
						{{ $slot }}
					</div>

					<div class="flex gap-2">
						<button type="submit" class="btn btn-sm btn-primary">Filtrar</button>
						<button
							type="button"
							class="btn btn-sm btn-secondary"
							x-on:click="$dispatch('data-table:filters-cleared')"
						>
							Limpiar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
