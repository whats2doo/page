import { mount } from '@vue/test-utils'
import expect from 'expect'
import Example from '../../resources/assets/js/components/ExampleComponent.vue'

describe('Example', () => {
  it('first test', () => {
    const wrapper = mount(Example)
    expect(wrapper.html()).toContain('Example Component')
  })
})
