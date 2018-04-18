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
        animation: null,
      },
      dogsitter: {
        id: 'dogsitter',
        config: 'dogsitter.json',
        animation: null,
      },
      gardener: {
        id: 'gardener',
        config: 'gardener.json',
        animation: null,
      },
      painter: {
        id: 'painter',
        config: 'painter.json',
        animation: null,
      },
      carpenter: {
        id: 'carpenter',
        config: 'carpenter.json',
        animation: null,
      },
      trainer: {
        id: 'trainer',
        config: 'trainer.json',
        animation: null,
      },
      windowCleaner: {
        id: 'windowCleaner',
        config: 'window-cleaner.json',
        animation: null,
      },
      dj: {
        id: 'dj',
        config: 'dj.json',
        animation: null,
      },
      houseman: {
        id: 'houseman',
        config: 'houseman.json',
        animation: null,
      },
      peopleLeft: {
        id: 'peopleLeft',
        config: 'sub2-left.json',
        animation: null,
      },
      peopleRight: {
        id: 'peopleRight',
        config: 'sub2-right.json',
        animation: null,
      },
    },
    activeAnimation: null,
  },

  // build selector string for viewport checker
  getSelector() {
    const selectorArray = _map(animations.data.config, item => item.id)

    return `#${_join(selectorArray, ', #')}`
  },

  playHeaderAnimation() {
    animations.data.config.painter.animation.play()
  },

  removePlaceholder() {
    $('#placeholder-image').css({ opacity: 0 })
    setTimeout(() => {
      animations.playHeaderAnimation()
    }, 3000)
  },

  init() {
    lottie.setQuality('low')
    // load animations
    _each(animations.data.config, (item) => {
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
