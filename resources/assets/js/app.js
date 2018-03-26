import $ from 'jquery'
import Vue from 'vue'
import VueI18n from 'vue-i18n'
import './bootstrap'
import penis from './components/penis/penis.vue'

// locales
import en from './locales/en'
import de from './locales/de'

// fonts
require('ionicons/dist/css/ionicons.css')

// env
window.env = document.querySelector('html').getAttribute('data-env')

// navbar scroll
require('./navbar')
require('./footer')
require('./animations')
require('jquery-lazyload/jquery.lazyload.js')
require('./token-allocation')
require('./ico')

$('.lazyload').lazyload({
  threshold: 200,
})

// i18n
Vue.use(VueI18n)
const i18n = new VueI18n({
  locale: 'en',
  fallbackLocale: 'en',
  messages: {
    de,
    en,
  },
})

// manage vue objects
Vue.create = obj => new Vue(obj)

if (document.getElementById('penis')) {
  Vue.create({
    el: '#penis',
    i18n,
    components: {
      penis,
    },
  })
}
