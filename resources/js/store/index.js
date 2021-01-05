import Vue from 'vue';
import Vuex from 'vuex';

import * as volume from "./modules/24_volumes";
import * as tk from "./modules/ticker";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {},
    mutations: {},
    actions: {},
    modules: {
        volume,
        tk
    }
})
