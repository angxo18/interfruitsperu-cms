import { Alpine as AlpineType } from 'alpinejs'

declare global {
	var Alpine: AlpineType

	interface AlpineComponent {
		$el: HTMLElement
		$refs: Record<string, HTMLElement>
		$watch: (prop: string, callback: (value: any) => void) => void
		$dispatch: (event: string, detail?: any) => void
	}
}
