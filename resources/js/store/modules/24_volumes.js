import axios from "axios";

export const namespaced = true;

const apiClient = axios.create({
    baseURL: "/api/24_volumes"
});


export const state = {
    volumes: null
};

export const mutations = {
    SUCCESS_FETCH(state, payload){
        state.volumes = payload
    }
};

export const actions = {
    async fetchVolumes({commit}){
        try {
            const response = await apiClient.get('');
            commit('SUCCESS_FETCH', response.data.msg);
        } catch (e) {
            // console.log(e.response.data.msg);
        }
    }
};
