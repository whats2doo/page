import Vue from 'vue'
import './bootstrap'
import penis from './components/penis/penis.vue'

// fonts
require('ionicons/dist/css/ionicons.css')

// images
require('../images/W2D.svg')

// env
window.env = document.querySelector('html').getAttribute('data-env')

// navbar scroll
require('./navbar')
require('./footer')
require('./animations')

// manage vue objects
Vue.create = obj => new Vue(obj)

if (document.getElementById('penis')) {
  Vue.create({
    el: '#penis',
    components: {
      penis,
    },
  })
}

