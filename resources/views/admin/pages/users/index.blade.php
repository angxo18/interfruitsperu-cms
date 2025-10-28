<x-admin.layouts.app title="Usuarios">
	<h1>Usuarios</h1>

	<x-admin.card-container>
		<x-admin.data-table :table-zebra="true">
			<div class="mb-5 flex flex-col lg:flex-row lg:justify-between lg:items-center">
				<div class="flex flex-col lg:flex-row gap-1">
					<button type="button" class="btn btn-sm btn-primary">Nuevo</button>
					<button type="button" class="btn btn-sm btn-secondary">Lorem</button>
				</div>
				<div class="flex items-center gap-1">
					<label class="input input-sm">
						<x-app-icon name="search" class="w-4 h-4" />
						<input type="search" class="grow" placeholder="Buscar" />
					</label>

					<button class="btn btn-sm btn-square btn-ghost">
						<x-app-icon name="list-filter" class="w-4 h-4" />
					</button>
				</div>
			</div>

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
</x-admin.layouts.app>
