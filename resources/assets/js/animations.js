import lottie from 'lottie-web/build/player/lottie.min'
import _map from 'lodash/map'
import _join from 'lodash/join'
import _each from 'lodash/each'

require('jquery-viewport-checker/src/jquery.viewportchecker')

const animations = {
  data: {
    config: {
      carRepair: {
        id: 'carRepair',
        config: 'car-repair.json',
        configMobile: 'car-repair.json',
        animation: null,
      },
      dogsitter: {
        id: 'dogsitter',
        config: 'dogsitter.json',
        configMobile: 'dogsitter-small.json',
        animation: null,
      },
      gardener: {
        id: 'gardener',
        config: 'gardener.json',
        configMobile: 'gardener-small.json',
        animation: null,
      },
      cleaner: {
        id: 'cleaner',
        config: 'cleaner.json',
        configMobile: 'cleaner.json',
        animation: null,
      },
      painter: {
        id: 'painter',
        config: 'painter.json',
        configMobile: 'painter.json',
        animation: null,
      },
      carpenter: {
        id: 'carpenter',
        config: 'carpenter.json',
        configMobile: 'carpenter.json',
        animation: null,
      },
      trainer: {
        id: 'trainer',
        config: 'trainer.json',
        configMobile: 'trainer.json',
        animation: null,
      },
      windowCleaner: {
        id: 'windowCleaner',
        config: 'window-cleaner.json',
        configMobile: 'window-cleaner.json',
        animation: null,
      },
      dj: {
        id: 'dj',
        config: 'dj.json',
        configMobile: 'dj-small.json',
        animation: null,
      },
      houseman: {
        id: 'houseman',
        config: 'houseman.json',
        configMobile: 'houseman-small.json',
        animation: null,
      },
      peopleLeft: {
        id: 'peopleLeft',
        config: 'sub2-left.json',
        configMobile: 'sub2-left.json',
        animation: null,
      },
      peopleRight: {
        id: 'peopleRight',
        config: 'sub2-right.json',
        configMobile: 'sub2-right.json',
        animation: null,
      },
    },
    activeAnimation: null,
    mobileBreakpoint: 600,
  },

  // build selector string for viewport checker
  getSelector() {
    const selectorArray = _map(animations.data.config, item => item.id)

    return `#${_join(selectorArray, ', #')}`
  },

  removePlaceholder() {
    $('#placeholder-image').css({ opacity: 0 })
    animations.data.config.painter.animation.play()
  },
  
  getViewportWidth() {
    return Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
  },

  init() {
    lottie.setQuality('low')
    // load animations
    _each(animations.data.config, (item) => {
      if (animations.getViewportWidth() < animations.data.mobileBreakpoint) item.config = item.configMobile

      item.animation = animations.loadAnimation(item.id, item.config)
      if (item.id === 'painter') {
        item.animation.addEventListener('data_ready', animations.removePlaceholder)
      }
    })

    animations.runViewportChecker()
  },

  loadAnimation(elementId, filename) {
    return lottie.loadAnimation({
      container: document.getElementById(elementId),
      renderer: 'svg',
      loop: true,
      autoplay: false,
      path: `/animations/${filename}`,
    })
  },

  runViewportChecker() {
    $(animations.getSelector()).viewportChecker({
      offset: 200,
      repeat: true,
      callbackFunction: function callback(elem, action) {
        if (!elem[0]) return
        if (!elem[0].id) return

        // stop animation
        if (action === 'remove') {
          animations.data.config[elem[0].id].animation.stop()

          return
        }

        // play animation
        animations.data.config[elem[0].id].animation.play()
      },
    })
  },
}

animations.init()
