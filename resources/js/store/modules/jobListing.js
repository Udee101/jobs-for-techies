import { getJobListings } from "../../api/listings";

const state = () => ({
  jobListings: {}
});

const mutations = {
  setJobListings(state, {listings}) {
    state.jobListings = listings
  }
};

const actions = {
  async fetchJobListings({commit}){
    const listings = await getJobListings();

    commit('setJobListings', { listings: listings.data.listings });
  }
};

export default {
  namespaced: true,
  state,
  mutations,
  actions
}