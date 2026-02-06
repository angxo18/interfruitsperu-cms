<x-admin.layouts.app title="Usuarios">
	@push('scripts')
		@vite(['resources/ts/admin/users/index.ts'])
	@endpush

	<div x-data="index">
		<h1>Usuarios</h1>

		<x-admin.card-container>
			<x-admin.data-table :table-zebra="true">
				<x-slot:actions>
					<button id="btn_new" type="button" class="btn btn-sm btn-primary">Nuevo</button>
					<button type="button" class="btn btn-sm btn-secondary">Lorem</button>
				</x-slot>

				<x-slot:filters>
					<form role="search" x-on:submit.prevent="applyFilters">
						<x-admin.data-table.filters.input-search
							placeholder="Nombre, Email"
							x-model="filters.search"
						/>
					</form>

					<x-admin.data-table.filters-drawer>
						<x-admin.data-table.filters.input-text
							label="Nombre"
							placeholder="Nombre"
							name="name"
							x-model="filters.name"
						/>

						<x-admin.data-table.filters.input-text
							label="Email"
							placeholder="Email"
							name="email"
							x-model="filters.email"
						/>

						<x-admin.data-table.filters.date-range
							label="Fecha de Creación"
							model="filters.created_at"
						/>
					</x-admin.data-table.filters-drawer>
				</x-slot>

				<x-slot:thead>
					<tr>
						<td>#</td>
						<td>Nombre</td>
						<td>Email</td>
						<td>Creado El</td>
						<td>Acciones</td>
					</tr>
				</x-slot>

				@foreach ($users as $i => $user)
					<tr>
						<td>{{ $users->firstItem() + $i }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at }}</td>
						<td>
							<x-admin.data-table.row-actions>
								<x-admin.data-table.row-actions.button action="show" as="a" />
								<x-admin.data-table.row-actions.button action="edit" />
								<x-admin.data-table.row-actions.button action="delete" />
							</x-admin.data-table.row-actions>
						</td>
					</tr>
				@endforeach

				<x-slot:pagination>
					<x-admin.data-table.pagination :paginator="$users" />
				</x-slot>
			</x-admin.data-table>
		</x-admin.card-container>

		@if ($errors->filters->any())
			<x-admin.flash-alert
				alert-class="alert alert-error"
				alert-icon-type="error"
				title="Errores en búsqueda"
			>
				<span>Hay errores en los filtros de búsqueda.</span>
			</x-admin.flash-alert>
		@endif
	</div>
</x-admin.layouts.app>
