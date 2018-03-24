import bodymovin from 'bodymovin/build/player/bodymovin.min'
import _map from 'lodash/map'
import _join from 'lodash/join'
import _each from 'lodash/each'

require('jquery-viewport-checker/src/jquery.viewportchecker')

// rendererSettings: {
//   clearCanvas: true,
//   progressiveLoad: false,
//   hideOnTransparent: true,
// },

const animations = {
  data: {
    config: {
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
        config: 'window_cleaner.json',
        animation: null,
      },
      dj: {
        id: 'dj',
        config: 'dj.json',
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

  init() {
    // load animations
    _each(animations.data.config, (item) => {
      item.animation = animations.loadAnimation(item.id, item.config)
    })

    animations.runViewportChecker()
  },

  loadAnimation(elementId, filename) {
    return bodymovin.loadAnimation({
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
