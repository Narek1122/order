<template>
    <!-- <v-app>
      <v-card>
        <v-toolbar color="primary" elevation="3" dark rounded="0">
          <v-toolbar-title>Tasks</v-toolbar-title>
        </v-toolbar>
      </v-card>
    </v-app> -->

    <OrderComponent
    v-for="data in Orders"
    :key="data.id"
    :data="data"
    />

    <PaginationComponent/>
  </template>

  <script>
import OrderComponent from './components/OrderComponent.vue'
import CreateComponent from './components/CreateComponent.vue'
import PaginationComponent from './components/PaginationComponent.vue'

  export default {
    name: 'App',
    data: () => ({}),
    components: {
        CreateComponent,
        OrderComponent,
        PaginationComponent
    },
    beforeMount() {
        this.$store.dispatch('getOrders')
  },
  computed:{
    Orders(){
        return this.$store.getters.getOrders
    }
  },
    methods:{
        getData(){
            console.log(222)
        }
    },
  };
  </script>
