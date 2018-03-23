import Vue from 'vue'
import './bootstrap'
import penis from './components/penis/penis.vue'

// fonts
require('ionicons/dist/css/ionicons.css')

// animations
require('../animations/trainer.json')
require('../animations/window_cleaner.json')
require('../animations/carpenter.json')
require('../animations/dj.json')


// images
require('../images/W2D.svg')
require('../images/trainer_bg.png')
require('../images/company_logos.png')
require('../images/w2d_ico_logo.png')
require('../images/people.png')

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

