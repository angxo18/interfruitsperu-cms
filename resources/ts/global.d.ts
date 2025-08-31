// import { Alpine as AlpineType } from 'alpinejs'
// import type { AxiosInstance } from 'axios'

// declare global {
// 	var Alpine: AlpineType
// 	var axios: AxiosInstance

// 	interface AlpineComponent {
// 		$el: HTMLElement
// 		$refs: Record<string, HTMLElement>
// 		$watch: (prop: string, callback: (value: any) => void) => void
// 		$dispatch: (event: string, detail?: any) => void
// 	}
// }

import type { AxiosInstance } from 'axios'
import type Alpine from 'alpinejs'

declare global {
	interface Window {
		axios: AxiosInstance
		Alpine: typeof Alpine
	}

	interface AlpineComponent {
		$el: HTMLElement
		$refs: Record<string, HTMLElement>
		$watch: (prop: string, callback: (value: any) => void) => void
		$dispatch: (event: string, detail?: any) => void
	}
}
