import $ from 'jquery'
import Vue from 'vue'
import VueI18n from 'vue-i18n'
import './bootstrap'
import roadmap from './components/roadmap/roadmap.vue'
import subscribe from './components/subscribe/subscribe.vue'
import countdown from './components/countdown/countdown.vue'

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
require('./faq')

$('.lazyload').lazyload({
  threshold: 200,
})

$('[data-toggle="tooltip"]').tooltip()

$('a').click((e) => {
  e.preventDefault()
  if ($(this).attr('data-toggle') === 'tooltip') return false

  return true
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

if (document.getElementById('roadmap-app')) {
  Vue.create({
    el: '#roadmap-app',
    i18n,
    components: {
      roadmap,
    },
  })
}

if (document.getElementById('subscribe-container')) {
  Vue.create({
    el: '#subscribe-container',
    i18n,
    components: {
      subscribe,
    },
  })
}

if (document.getElementById('countdown')) {
  Vue.create({
    el: '#countdown',
    i18n,
    components: {
      countdown,
    },
  })
}
