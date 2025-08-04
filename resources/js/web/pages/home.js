import heroCarousel from '../components/hero-carousel.js'

document.addEventListener('alpine:init', () => {
	Alpine.data('heroCarousel', heroCarousel)

	// Alpine.data('homePage', () => ({
	// 	message: 'Hola desde Alpine en home.js',
	// 	init() {
	// 		setTimeout(() => {
	// 			console.log('home!!')
	// 		}, 3000)

	// 		console.log(this.message)
	// 	},
	// }))
})
