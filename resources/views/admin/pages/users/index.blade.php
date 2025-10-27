<x-admin.layouts.app title="Usuarios">
	<h1>Usuarios</h1>

	<x-admin.card-container>
		<x-admin.data-table>
			<x-slot:head>
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
						<x-admin.data-table.actions>
							<x-admin.data-table.actions.button action="show" as="a" />
							<x-admin.data-table.actions.button action="edit" />
							<x-admin.data-table.actions.button action="delete" />
						</x-admin.data-table.actions>
					</td>
				</tr>
			@endforeach

			<x-slot:pagination>
				<x-admin.data-table.pagination :paginator="$users" />
			</x-slot>
		</x-admin.data-table>
	</x-admin.card-container>
</x-admin.layouts.app>
