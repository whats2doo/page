import axios from 'axios'

const subscribeService = {
  subscribe(email) {
    return axios.get(`api/subscribe?email=${email}`)
      .then(response => response.data)
      .catch(error => error)
  },
}

export default subscribeService
