export default () => ({
	current: 0,
	interval: 3000,
	timer: null,
	countImages: 0,
	init() {
		this.countImages = this.$el.querySelectorAll('img').length
		this.start()
	},
	start() {
		this.timer = setInterval(() => this.next(), this.interval)
	},
	reset() {
		clearInterval(this.timer)
		this.start()
	},
	next() {
		this.current = (this.current + 1) % this.countImages
	},
	prev() {
		this.current = (this.current - 1 + this.countImages) % this.countImages
	},
	goTo(index) {
		this.current = index
		this.reset()
	},
})
