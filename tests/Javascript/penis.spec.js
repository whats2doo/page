import { mount } from '@vue/test-utils'
import expect from 'expect'
import penis from '../../resources/assets/js/components/penis/penis.vue'

describe('Penis', () => {
  it('first test', () => {
    const wrapper = mount(penis)

    expect(wrapper.html()).toContain('Example Component')
  })
})
