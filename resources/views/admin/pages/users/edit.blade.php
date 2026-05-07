<x-admin.layouts.app title="Editar Usuario">
	@push('scripts')
		@vite(['resources/ts/admin/users/edit.ts'])
	@endpush

	<x-admin.page-title>Editar Usuario</x-admin.page-title>

	<div x-data="edit" class="flex flex-col gap-5">
		<x-admin.card-container>
			<x-slot:header>
				<x-admin.card-container.header
					title="Editar Usuario"
					description="Modifica la información del usuario."
				/>
			</x-slot>

			<form
				class="flex flex-col gap-5"
				action="{{ route('admin.users.update', $user->id) }}"
				method="POST"
				x-on:submit.prevent="handleSubmitFormUpdateUser"
				x-ref="formUpdateUser"
			>
				@csrf

				@method('PUT')

				<x-admin.form.input-text
					name="name"
					id="name_id"
					label="Nombre *"
					value="{{ old('name', $user->name) }}"
					placeholder="Nombre"
					autocomplete="off"
				/>

				<x-admin.form.input-text
					name="email"
					id="email_id"
					type="email"
					label="Email *"
					value="{{ old('email', $user->email) }}"
					placeholder="Email"
					autocomplete="off"
				/>

				<div class="flex justify-end gap-2">
					<x-admin.form.cancel-button
						href="{{ route('admin.users.index') }}"
						x-bind:class="{ 'btn-disabled': submittingFormUpdateUser }"
					/>

					<x-admin.form.submit-button
						x-bind:class="{ 'btn-disabled': submittingFormUpdateUser }"
					/>
				</div>
			</form>
		</x-admin.card-container>

		<x-admin.card-container>
			<x-slot:header>
				<x-admin.card-container.header
					title="Editar Contraseña"
					description="Modifica la contraseña del usuario."
				/>
			</x-slot>
			<form
				class="flex flex-col gap-5"
				action="{{ route('admin.users.update-password', $user->id) }}"
				method="POST"
				x-on:submit.prevent="handleSubmitFormUpdatePassword"
				x-ref="formUpdatePassword"
			>
				@csrf

				@method('PUT')

				<x-admin.form.input-text
					name="password"
					error-bag="password"
					id="password_id"
					type="password"
					label="Contraseña *"
					value=""
					placeholder="Contraseña"
				/>

				<x-admin.form.input-text
					name="password_confirmation"
					error-bag="password"
					id="password_confirmation_id"
					type="password"
					label="Confirmar Contraseña *"
					value=""
					placeholder="Confirmar Contraseña"
				/>

				<div class="flex justify-end gap-2">
					<x-admin.form.cancel-button
						href="{{ route('admin.users.index') }}"
						x-bind:class="{ 'btn-disabled': submittingFormUpdatePassword }"
					/>

					<x-admin.form.submit-button
						x-bind:class="{ 'btn-disabled': submittingFormUpdatePassword }"
					/>
				</div>
			</form>
		</x-admin.card-container>
	</div>
</x-admin.layouts.app>
