import Vue from 'vue'
import './bootstrap'
import example from './components/example/example.vue'

// fonts
require('ionicons/dist/css/ionicons.css')

// images
require('../images/W2D.svg')

// env
window.env = document.querySelector('html').getAttribute('data-env')

// navbar scroll
require('./navbar')
require('./footer')

// manage vue objects
Vue.create = obj => new Vue(obj)

if (document.getElementById('#app')) {
  Vue.create({
    el: '#app',
    components: {
      example,
    },
  })
}
