import Alpine from 'alpinejs'
import heroCarousel from '../components/hero-carousel'

document.addEventListener('alpine:init', () => {
	Alpine.data('heroCarousel', heroCarousel)
})
