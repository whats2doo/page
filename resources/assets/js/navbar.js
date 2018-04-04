import $ from 'jquery'

$('body').scrollspy({
  target: '#navbar-main',
  offset: $('#navbar-main').innerHeight(),
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
