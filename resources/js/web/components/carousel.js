export default () => ({
	count: 0,
	currentIndex: 0,
	autoplay: true,
	interval: null,
	init() {
		this.count = this.$refs.carouselItems.querySelectorAll('[data-carousel-item]').length

		if (this.autoplay) {
			this.startAutoplay()
		}
	},
	startAutoplay() {
		this.interval = setInterval(() => {
			this.next()
		}, 7000)
	},
	stopAutoplay() {
		clearInterval(this.interval)
	},
	prev() {
		this.currentIndex = (this.currentIndex - 1 + this.count) % this.count
	},
	next() {
		this.currentIndex = (this.currentIndex + 1) % this.count
	},
	goTo(index) {
		this.currentIndex = index
	},
})
