import $ from 'jquery'

require('jquery.scrollto/jquery.scrollTo.min.js')

$('nav#navbar-main ul li a').bind('click', function scroll(e) {
  e.preventDefault()
  $.scrollTo(this.hash, 1000, {
    offset: -60,
  })
})

const navbar = {
  window: null,
  navbar: null,
  handle() {
    if (this.window.scrollTop() === 0) {
      this.navbar.addClass('navbar-clear')

      return
    }

    this.navbar.removeClass('navbar-clear')
  },

  init() {
    this.window = $(window)
    this.navbar = $('nav#navbar-main')

    this.handle()

    this.window.scroll(() => {
      this.handle()
    })
  },
}

navbar.init()
