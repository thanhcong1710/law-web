import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

const state = {
  user_data: '',
}

const mutations = {
  set (state, [variable, value]) {
    console.log(variable)
    state[variable] = value
  }
}

export default new Vuex.Store({
  state,
  mutations
})