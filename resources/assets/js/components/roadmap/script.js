import _each from 'lodash/each'

const config = require('./data.json')

export default {
  name: 'roadmap',
  data() {
    return {
      config,
      nav: {
        default: 2018,
        items: {
          2017: {
            active: false,
            value: 2017,
          },
          2018: {
            active: false,
            value: 2018,
          },
          2019: {
            active: false,
            value: 2019,
          },
        },
      },
      currentYearData: {},
    }
  },

  mounted() {
    this.nav.items[this.nav.default].active = true
    this.currentYearData = config[this.nav.items[this.nav.default].value]
  },

  methods: {
    inactiveAll() {
      _each(this.nav.items, (item) => {
        item.active = false
      })
    },

    changeYear(year) {
      if (!config[year]) return

      this.inactiveAll()
      this.nav.items[year].active = true
      this.currentYearData = config[this.nav.items[year].value]
    },
  },
}
