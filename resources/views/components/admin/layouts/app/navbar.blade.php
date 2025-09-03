<div
	class="top-0 sticky flex justify-between items-center bg-base-100 min-h-16 max-h-16 z-10 border border-b border-base-content/5 px-3"
	role="navigation"
	aria-label="Navbar"
>
	<div>
		<button class="btn btn-sm btn-square btn-ghost" x-on:click="openSidebar = !openSidebar">
			<x-lucide-menu class="w-5 h-5" />
		</button>
	</div>

	<div class="inline-flex gap-0.5 items-center">
		<button class="btn btn-sm btn-circle btn-ghost">
			<x-lucide-sun class="w-5 h-5" />
		</button>
		<button class="btn btn-sm btn-circle btn-ghost">
			<x-lucide-bell class="w-5 h-5" />
		</button>
	</div>
</div>
