import Vue from 'vue'
import $ from 'jquery'
import './bootstrap'

Vue.component(
  'example-component',
  require('./components/ExampleComponent.vue'),
)

const app = new Vue({
  el: '#app',
})

app()
