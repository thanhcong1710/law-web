import Vue from 'vue'

// axios
import axios from 'axios'

const axiosIns = axios.create({
  // You can add your headers here
  // ================================
  baseURL: process.env.VUE_APP_BASE_API,
  timeout: 1000000,
  headers: {'Authorization': `Bearer ${localStorage.getItem('accessToken')}`}
})

axiosIns.interceptors.response.use(response => response,
  error => {
    if (error.response.status === 401) {
      // alert('Phiên làm việc của bạn đã hết hạn. Vui lòng đăng nhập lại.')
      // location.href = '/login'
    } else {
      return Promise.reject(error.response.data)
    }
  })

Vue.prototype.$https = axiosIns

export default axiosIns
