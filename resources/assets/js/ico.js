import $ from 'jquery'

const ico = {
  data: {
    preIco: {
      id: 'pre-ico-info',
      tabId: 'pre-ico-tab',
    },
    mainIco: {
      id: 'main-ico-info',
      tabId: 'main-ico-tab',
    },
  },

  inactiveAllTabs() {
    $('.ico-tabs > ul > li').removeClass('active')
  },

  init() {
    $('.ico-tabs > ul > li').click((elem) => {
      const clickedTab = $(`#${elem.target.id}`)

      if (clickedTab.hasClass('active')) return

      const mainIcoInfo = $(`#${ico.data.mainIco.id}`)
      const preIcoInfo = $(`#${ico.data.preIco.id}`)

      switch (elem.target.id) {
        case ico.data.preIco.tabId:
          ico.inactiveAllTabs()
          clickedTab.addClass('active')
          mainIcoInfo.hide()
          preIcoInfo.show()
          break
        case ico.data.mainIco.tabId:
          ico.inactiveAllTabs()
          clickedTab.addClass('active')
          preIcoInfo.hide()
          mainIcoInfo.show()
          break
        default:
          break
      }
    })
  },
}

ico.init()
