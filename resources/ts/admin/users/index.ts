import Alpine from 'alpinejs'

// interface LoginComponent {
//     submitting: boolean
//     handleSubmit(this: LoginComponent & AlpineComponent): void
// }

Alpine.data('index', () => ({
	search: 'texto',
	filters: {
		name: '',
	},
	applyFilters() {
		console.log('send')
	},
}))
