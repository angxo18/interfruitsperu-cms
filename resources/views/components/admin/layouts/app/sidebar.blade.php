{{--
    Component: Sidebar
    AlpineJS Requirements:
    - openSidebar (Boolean): controla si el sidebar está abierto o cerrado.
--}}

@props([
	'menuCategories' => [],
])

<div
	class="absolute flex flex-col bg-base-100 shrink-0 w-64 h-screen max-h-screen z-90 lg:z-10 transition-all duration-300 border-solid border-r border-base-300"
	x-bind:class="[openSidebar ? '-translate-x-0' : '-translate-x-full']"
>
	<div class="flex justify-between items-center gap-3 min-h-16 h-16 px-4">
		<div class="flex items-center gap-1">
			<x-lucide-globe class="w-8 h-8" />
			<span class="font-medium text-lg">Interfruits Perú</span>
		</div>
		<div class="lg:hidden">
			<button class="btn btn-sm btn-ghost btn-circle" x-on:click="openSidebar = false">
				<x-lucide-x class="w-5 h-5" />
			</button>
		</div>
	</div>
	<div class="grow-1 overflow-y-auto">
		@foreach ($menuCategories as $menuCategorie)
			@if ($menuCategorie->menus->count() > 0)
				<ul class="menu w-full">
					<li class="menu-title">{{ $menuCategorie->name }}</li>
					@foreach ($menuCategorie->menus as $menu)
						@if ($menu->children->count() > 0)
							<li x-data="{ open: false }">
								<span
									class="menu-dropdown-toggle {{ $menu->is_active ? 'menu-active' : '' }}"
									x-bind:class="{ 'menu-dropdown-show': open }"
									x-on:click="open =! open"
								>
									<x-app-icon :name="$menu->icon" class="w-5 h-5" />
									{{ $menu->title }}
								</span>

								<ul
									x-show="open"
									x-transition:enter="transition ease-out duration-300"
									x-transition:enter-start="opacity-0 max-h-0"
									x-transition:enter-end="opacity-100 max-h-96"
									x-transition:leave="transition ease-in duration-300"
									x-transition:leave-start="opacity-100 max-h-96"
									x-transition:leave-end="opacity-0 max-h-0"
									class="menu-dropdown overflow-hidden"
									x-bind:class="{ 'menu-dropdown-show': open }"
								>
									@foreach ($menu->children as $submenu)
										<li>
											<a
												href="{{ $submenu->url }}"
												class="{{ $submenu->is_active ? 'menu-active' : '' }}"
											>
												{{ $submenu->title }}
											</a>
										</li>
									@endforeach
								</ul>
							</li>
						@else
							<li>
								<a
									href="{{ $menu->url }}"
									class="{{ $menu->is_active ? 'menu-active' : '' }}"
								>
									<x-app-icon :name="$menu->icon" class="h-5 w-5" />
									{{ $menu->title }}
								</a>
							</li>
						@endif
					@endforeach
				</ul>
			@endif
		@endforeach
	</div>
</div>
