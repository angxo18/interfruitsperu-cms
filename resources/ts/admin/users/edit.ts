import Alpine from 'alpinejs'

Alpine.data('edit', () => ({
	submittingFormUpdateUser: false,
	submittingFormUpdatePassword: false,
	handleSubmitFormUpdateUser() {
		this.submittingFormUpdateUser = true
		;(this.$refs.formUpdateUser as HTMLFormElement).submit()
	},
	handleSubmitFormUpdatePassword() {
		this.submittingFormUpdatePassword = true
		;(this.$refs.formUpdatePassword as HTMLFormElement).submit()
	},
}))
