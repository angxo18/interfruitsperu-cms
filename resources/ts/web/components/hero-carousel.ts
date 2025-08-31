interface HeroCarousel {
	current: number
	interval: number
	timer: number | null
	countImages: number
	init(this: HeroCarousel & AlpineComponent): void
	start(this: HeroCarousel & AlpineComponent): void
	reset(this: HeroCarousel & AlpineComponent): void
	next(this: HeroCarousel & AlpineComponent): void
	prev(this: HeroCarousel & AlpineComponent): void
	goTo(this: HeroCarousel & AlpineComponent, index: number): void
}

export default (): HeroCarousel => ({
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
		if (this.timer) {
			clearInterval(this.timer)
		}
		this.start()
	},
	next() {
		this.current = (this.current + 1) % this.countImages
	},
	prev() {
		this.current = (this.current - 1 + this.countImages) % this.countImages
	},
	goTo(index) {
		if (index >= 0 && index < this.countImages) {
			this.current = index
			this.reset()
		}
	},
})
