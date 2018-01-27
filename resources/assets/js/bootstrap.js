import axios from 'axios'
import $ from 'jquery'
import 'bootstrap-sass'

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

// csrf token
const token = document.head.querySelector('meta[name="csrf-token"]')

if (token) {
  axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content
}
