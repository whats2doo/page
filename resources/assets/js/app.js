import './bootstrap'
import $ from 'jquery'
// import Vue from 'vue'

// fonts
require('ionicons/dist/css/ionicons.css')

// images
require('../images/W2D.svg')

// env
window.env = document.querySelector('html').getAttribute('data-env')

// navbar scroll
require('./navbar')
require('./footer')

// Vue.component(
//   'example-component',
//   require('./components/ExampleComponent.vue'),
// )
//
// const app = new Vue({
//   el: '#app',
// })
