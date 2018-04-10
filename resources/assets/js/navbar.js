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
      if (currentScrollHeight !== document.body.scrollHeight) scrollPageTo($target);
    },
  });
}

// data-scroll="subscribe"

$('[data-scroll!=\'\'][data-scroll]').click(function (e) {
  e.preventDefault()
  const id = $(this).attr('data-scroll')

  if (!id) return false

  scrollPageTo(`#${id}`)

  return true
});

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
