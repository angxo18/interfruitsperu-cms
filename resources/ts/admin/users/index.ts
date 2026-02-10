import Alpine from 'alpinejs'

interface UserFilters {
	search: string
	name: string
	email: string
	created_at: {
		operator: string
		from: string
		to: string
	}
}

const defaultOperator = 'on'

const getDefaultFilters = (): UserFilters => ({
	search: '',
	name: '',
	email: '',
	created_at: {
		operator: defaultOperator,
		from: '',
		to: '',
	},
})

Alpine.data('index', () => ({
	filters: getDefaultFilters(),
	pageParam: 'page',
	init() {
		this.pageParam = this.$el.dataset.pageParam || 'page'

		const params = new URLSearchParams(window.location.search)

		this.filters.search = params.get('filter[search]') || ''
		this.filters.name = params.get('filter[name]') || ''
		this.filters.email = params.get('filter[email]') || ''

		this.filters.created_at.operator =
			params.get('filter[created_at][operator]') || defaultOperator
		this.filters.created_at.from = params.get('filter[created_at][from]') || ''
		this.filters.created_at.to = params.get('filter[created_at][to]') || ''

		this.$el.addEventListener('data-table:filters-submitted', () => {
			this.applyFilters()
		})

		this.$el.addEventListener('data-table:filters-cleared', () => {
			this.clearFilters()
		})
	},
	applyFilters() {
		const params = new URLSearchParams(window.location.search)

		params.set(this.pageParam, '1')

		if (this.filters.search) {
			params.set('filter[search]', this.filters.search)
		} else {
			params.delete('filter[search]')
		}

		if (this.filters.name) {
			params.set('filter[name]', this.filters.name)
		} else {
			params.delete('filter[name]')
		}

		if (this.filters.email) {
			params.set('filter[email]', this.filters.email)
		} else {
			params.delete('filter[email]')
		}

		const { operator, from, to } = this.filters.created_at

		if (operator && (from || to)) {
			params.set('filter[created_at][operator]', operator)
			if (from) params.set('filter[created_at][from]', from)
			if (to) params.set('filter[created_at][to]', to)
		} else {
			params.delete('filter[created_at][operator]')
			params.delete('filter[created_at][from]')
			params.delete('filter[created_at][to]')
		}

		const url = new URL(window.location.href)
		url.search = params.toString()
		window.location.href = url.toString()
	},
	clearFilters() {
		this.filters = getDefaultFilters()

		this.applyFilters()
	},
}))
