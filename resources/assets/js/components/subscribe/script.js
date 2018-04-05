import axios from 'axios'

export default {
  name: 'subscribe',
  data() {
    return {
      submitted: false,
      email: '',
      error: '',
      loader: false,
    }
  },
  methods: {
    submitEmail() {
      if (this.email !== '') {
        this.loadAPI()
      }
    },
    showError(error) {
      this.error = error
    },
    clearError() {
      this.error = ''
    },
    hideLoader() {
      this.loader = false
    },
    showLoader() {
      this.loader = true
    },
    showSuccess() {
      this.submitted = true
      this.email = ''
    },
    loadAPI() {
      this.showLoader()
      const url = `api/subscribe?email=${this.email}`

      axios.get(url)
        .then((response) => {
          if (response.status === 200) {
            if (response.data === 'exists') {
              this.loader = false
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
