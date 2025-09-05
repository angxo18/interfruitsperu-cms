<div
	class="drawer drawer-end"
	x-data
	x-init="
     document.addEventListener('keydown', (e) => {
     	if (e.key === 'Escape' && $refs.drawerToggle.checked) {
     		$refs.drawerToggle.checked = false
     	}
     })
 "
>
	<input id="user-sidemenu-drawer" type="checkbox" class="drawer-toggle" x-ref="drawerToggle" />
	<div class="drawer-content">
		<label for="user-sidemenu-drawer" class="drawer-button btn btn-ghost btn-circle">
			<div class="avatar avatar-placeholder">
				<div class="bg-neutral text-neutral-content w-9 rounded-full">
					<span class="text-sm">RC</span>
				</div>
			</div>
		</label>
	</div>
	<div class="drawer-side">
		<label
			for="user-sidemenu-drawer"
			aria-label="close user menu"
			class="drawer-overlay"
		></label>

		<div class="flex flex-col bg-base-200 text-base-content h-full w-80 p-4">
			<div>
				<label for="user-sidemenu-drawer" class="btn btn-sm btn-circle btn-ghost">
					<x-app-icon name="x" class="w-5 h-5" />
				</label>
			</div>
			<div class="flex flex-col items-center pb-5 border-b border-base-content/5">
				<div class="avatar avatar-placeholder">
					<div class="bg-neutral text-neutral-content w-24 rounded-full">
						<span class="text-3xl">RC</span>
					</div>
				</div>
				<p class="inline-block mt-8 text-lg font-medium">{{ auth()->user()->name }}</p>
				<p class="inline-block mt-1 text-sm text-base-content/60">
					{{ auth()->user()->email }}
				</p>
			</div>
			<div class="">
				<div class="menu w-full">
					<li class="menu-title">Cuenta</li>
					<li>
						<a href="#">
							<x-app-icon name="user" class="w-5 h-5" />
							<span>Perfil</span>
						</a>
					</li>
					<li>
						<form method="POST" action="{{ route('admin.logout') }}">
							@csrf
							<button
								type="submit"
								class="cursor-pointer text-error gap-2 flex items-center w-full"
							>
								<x-app-icon name="log-out" class="w-5 h-5" />
								<span>Cerrar Sesión</span>
							</button>
						</form>
					</li>
				</div>
			</div>
		</div>
	</div>
</div>
