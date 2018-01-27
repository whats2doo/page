import Vue from 'vue'
import './bootstrap'

window.env = document.querySelector('html').getAttribute('data-env')

Vue.component(
  'example-component',
  require('./components/ExampleComponent.vue'),
)

const app = new Vue({
  el: '#app',
})
