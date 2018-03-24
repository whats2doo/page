import Vue from 'vue'
import VueI18n from 'vue-i18n'
import { mount } from '@vue/test-utils'
import en from '../../resources/assets/js/locales/en'

Vue.use(VueI18n)

const addLocale = (options) => {
  options.i18n = new VueI18n({
    locale: 'en',
    messages: {
      en,
    },
  })

  return options
}

export function mountLocale(Component, options = {}) {
  return mount(Component, addLocale(options))
}
