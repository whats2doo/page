import $ from 'jquery'

const footer = {
  body: null,
  footer: null,
  window: null,

  handle() {
    this.body.css('margin-bottom', this.footer.height())
  },

  init() {
    this.body = $('body')
    this.footer = $('footer')
    this.window = $(window)

    this.handle()

    this.window.resize(() => {
      this.handle()
    })
  },
}

footer.init()
