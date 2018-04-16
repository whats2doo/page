import $ from 'jquery'

$('body').scrollspy({
  target: '#navbar-main',
  offset: $('#navbar-main').innerHeight(),
})

require('jquery.scrollto/jquery.scrollTo.min.js')

function scrollPageTo($target) {
  const currentScrollHeight = document.body.scrollHeight

  $(window).stop(true).scrollTo($target, {
    duration: 600,
    offset: -60,
    progress() {
      // If the page scroll height changes, scroll afresh to the shifted target
      if (currentScrollHeight !== document.body.scrollHeight) scrollPageTo($target)
    },
  })
}

$('nav#navbar-main ul li a').click(function (e) {
  e.preventDefault()
  const id = $(this).attr('href')

  if (!id) return false

  const navbarCollapse = $('.navbar-collapse')

  if (navbarCollapse.hasClass('in')) {
    navbarCollapse.removeClass('in')
  }

  scrollPageTo(id)

  return true
})

$('.dropdown').on('hide.bs.dropdown', (dropdown) => {
  $(dropdown.target).addClass('closed')
})

$('.dropdown').on('show.bs.dropdown', () => {
  $('.dropdown').removeClass('closed')
})

const navbar = {
  window: null,
  navbar: null,
  handle() {
    if (this.window.scrollTop() < 100) {
      this.navbar.addClass('navbar-clear')
      this.navbar.removeClass('show-navigation')

      return
    }

    this.navbar.removeClass('navbar-clear')
    this.navbar.removeClass('navbar-no-animation')
    this.navbar.addClass('show-navigation')
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
