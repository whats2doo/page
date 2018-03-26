import expect from 'expect'
import penis from '../../resources/assets/js/components/roadmap/penis.vue'
import { mountLocale } from './util'

describe('Penis', () => {
  it('first test', () => {
    const wrapper = mountLocale(penis)

    expect(wrapper.html()).toContain('Header en')
  })
})
