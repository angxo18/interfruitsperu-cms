import axios from 'axios'

const http = axios.create({
	// baseURL: '/api',
	headers: {
		'X-Requested-With': 'XMLHttpRequest',
	},
})

export default http
