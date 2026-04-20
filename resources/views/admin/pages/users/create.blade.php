<x-admin.layouts.app title="Nuevo Usuario">
	<x-admin.page-title>Nuevo Usuario</x-admin.page-title>

	<x-admin.card-container>
		<form class="flex flex-col gap-5" action="{{ route('admin.users.store') }}" method="POST">
			@csrf

			<x-admin.form.input-text
				name="name"
				id="name_id"
				label="Nombre *"
				value="{{ old('name', '') }}"
				placeholder="Nombre"
				autocomplete="off"
			/>

			<x-admin.form.input-text
				name="email"
				id="email_id"
				type="email"
				label="Email *"
				value="{{ old('email', '') }}"
				placeholder="Email"
				autocomplete="off"
			/>

			<x-admin.form.input-text
				name="password"
				id="password_id"
				type="password"
				label="Contraseña *"
				value=""
				placeholder="Contraseña"
			/>

			<x-admin.form.input-text
				name="password_confirmation"
				id="password_confirmation_id"
				type="password"
				label="Confirmar Contraseña *"
				value=""
				placeholder="Confirmar Contraseña"
			/>

			<div class="flex justify-end gap-2">
				<x-admin.form.cancel-button href="{{ route('admin.users.index') }}" />

				<x-admin.form.submit-button />
			</div>
		</form>
	</x-admin.card-container>
</x-admin.layouts.app>
