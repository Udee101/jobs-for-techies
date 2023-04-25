import { getUser } from "../../api/user";

const state = () => ({
  user: {},
  isUserAuth: false
})

const mutations = {
  setUser(state, { user }) {
    state.user = user
  },
  setUserAuthTrue(state) {
    state.isUserAuth = true
  },
  setUserAuthFalse(state) {
    state.isUserAuth = false
  }
}

const actions = {
  async fetchUser({ commit }) {
    const user = await getUser()

    commit('setUser', { user: user.data.user })
  },
}

export default {
  namspaced: true,
  state,
  mutations,
  actions
}