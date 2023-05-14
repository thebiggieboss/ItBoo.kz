import axios from "axios";


export const state = () => ({
  user: {},
});

export const getters = {
  getUser: (state) => {
    return state.user
  },
};

export const mutations = {
  setUser(state, user) {
    state.user = { ...state.user, ...user };
  },
};

export const actions = {
  setUser(store, { user }) {
    store.commit("setUser", user);
  },
};
