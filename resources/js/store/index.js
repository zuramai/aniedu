import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        nyawa: 3
    },
    mutations: {
        UPDATE_NYAWA(state, nyawa) {
            state.nyawa = nyawa
        },
        MINUS_NYAWA(state,nyawa) {
            state.nyawa--;
        }
    }
})