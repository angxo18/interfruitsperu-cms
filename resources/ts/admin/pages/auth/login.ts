import Alpine from 'alpinejs'

interface LoginComponent {
	submitting: boolean
	handleSubmit(this: LoginComponent & AlpineComponent): void
}

Alpine.data(
	'login',
	(): LoginComponent => ({
		submitting: false,
		handleSubmit() {
			this.submitting = true
			;(this.$refs.form as HTMLFormElement).submit()
		},
	}),
)

window.Alpine = Alpine
Alpine.start()
