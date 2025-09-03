{{--
    Component: Sidebar
    AlpineJS Requirements:
    - openSidebar (Boolean): controla si el sidebar está abierto o cerrado.
--}}

<div
	class="absolute bg-base-100 shrink-0 w-64 h-screen max-h-screen z-90 lg:z-10 transition-all duration-300 border-solid border-r border-base-content/5"
	x-bind:class="[openSidebar ? '-translate-x-0' : '-translate-x-full']"
>
	<div class="lg:hidden">
		<button class="btn" x-on:click="openSidebar = false">
			<x-lucide-x class="w-5 h-5" />
		</button>
	</div>
</div>
