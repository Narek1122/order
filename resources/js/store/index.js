import { createApp } from 'vue'
import { createStore } from 'vuex'
import axios from 'axios'

// Create a new store instance.
const store = createStore({
  state () {
    return {
      orders: [],
      current_page: 1
    }
  },
  getters:{
    getOrders(state){
        return state.orders
    },
    getCurrentPage(state){
        return state.current_page
    }
  },
  mutations: {
    setOrders (state,orders) {
      state.orders = orders
    },
    setCurrentPage (state,data) {
        state.current_page = data
      },
  },
  actions: {
    getOrders(context){
        axios.get('/api/order')
        .then((res)=>{
            console.log(res.data.data)
            context.commit('setCurrentPage',res.data.data.current_page)
            context.commit('setOrders',res.data.data.data)
        })
    }
  }
})

export default store;
