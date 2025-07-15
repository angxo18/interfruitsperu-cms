import carousel from '../components/carousel.js'

document.addEventListener('alpine:init', () => {
	Alpine.data('carousel', carousel)

	Alpine.data('homePage', () => ({
		message: 'Hola desde Alpine en home.js',
		init() {
			console.log(this.message)
		},
	}))
})
