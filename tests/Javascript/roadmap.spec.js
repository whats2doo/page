import expect from 'expect'
import roadmap from '../../resources/assets/js/components/roadmap/roadmap.vue'
import { mountLocale } from './util'

describe('Roadmap', () => {
  it('first test', () => {
    const wrapper = mountLocale(roadmap)

    expect(wrapper.html()).toContain('2017')
  })
})
