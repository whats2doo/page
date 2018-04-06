import subscribeService from '../../services/subscribe'

export default {
  name: 'subscribe',
  data() {
    return {
      submitted: false,
      email: null,
      error: false,
      loader: false,
    }
  },
  methods: {
    submitEmail() {
      if (this.email !== null) this.loadAPI()
    },

    showError(error) {
      this.error = error
    },

    clearError() {
      this.error = null
    },

    hideLoader() {
      this.loader = false
    },

    showLoader() {
      this.loader = true
    },

    showSuccess() {
      this.submitted = true
      this.email = null
    },

    loadAPI() {
      this.showLoader()

      subscribeService.subscribe(this.email)
        .then((response) => {
          console.log(response)

          switch (response) {
            case 'success':
              this.showSuccess()
              break
            case 'exists':
              this.loader = false
              this.showError('E-Mail address is already registered!')
              break
            case 'failed':
              this.loader = false
              this.showError('Invalid E-Mail address')
              break
            default:
              this.hideLoader()
              break
          }
        })
    },
  },
}
