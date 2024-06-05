import { defineStore } from 'pinia'
import axios from 'axios'

export const useAuthStore = defineStore('auth', {
  state: () => ({
    user: null,
  }),

  getters: {
    isAuthenticated: (state) => !!state.user,
  },

  actions: {
    async login(data) {
      try {
        // Ensure CSRF token is set before making the login request
        await axios.get('/sanctum/csrf-cookie');

        let response = await axios.post('/api/auth/login', data);
        
        this.user = response.data;
        
        console.log(response.data);

      } catch (e) {
        console.log(e);
      }
    },

    async logout() {
      try {
        await axios.post('/api/auth/logout');
        this.user = null;
      } catch (e) {
        console.log(e);
      }
    }
  }
})
