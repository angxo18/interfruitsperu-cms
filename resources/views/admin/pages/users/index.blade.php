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
							x-model="search"
						/>
					</form>

					<x-admin.data-table.filters-drawer>
						<ul class="menu bg-base-200 min-h-full w-80 p-4">
							<li><a>Sidebar Item 1</a></li>
							<li><a>Sidebar Item 2</a></li>
						</ul>
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
	</div>
</x-admin.layouts.app>
