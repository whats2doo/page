import $ from 'jquery'
import Vue from 'vue'
import VueResource from 'vue-resource';

Vue.use(VueResource)

export default {
  name: 'subscribe',
  data() {
    return {
      submitted: false,
      email: '',
      error: '',
    }
  },
  methods: {
    submitEmail() {
      if (this.email !== '') {
        this.loadAPI()
      }
    },
    showError(error) {
      $('#subscribe .subscribe-error').css('display', 'inline-block')
      this.error = error
    },
    clearError() {
      $('#subscribe .subscribe-error').hide()
      this.error = ''
    },
    hideLoader() {
      $('#subscribe .overlay').hide()
    },
    showLoader() {
      $('#subscribe .overlay').show()
      $('#subscribe .icon-con').hide()
    },
    showSuccess() {
      $('#subscribe .icon-con').show()
    },
    loadAPI() {
      this.showLoader()
      const url = `api/subscribe?email=${this.email}`

      Vue.http.get(url)
        .then((response) => {
          if (response.status === 200) {
            if (response.body === 'exists') {
              this.hideLoader()
              this.showError('E-Mail address is already registered!')
            } else {
              this.showSuccess()
            }
          }
        }).catch(() => {
          this.hideLoader()
          this.showError('E-Mail not valid!')
        })
    },
  },
}
