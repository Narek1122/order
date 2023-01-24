<template>
    <div class="text-center">
      <v-pagination
        v-model="page"
        :length="4"
        circle
      ></v-pagination>
    </div>
  </template>

<script>
export default {
  created () {
  },
    name: 'PaginationComponent',
    data: () => ({
        page: 1
    }),
    beforeCreate(){

    },
    computed:{
    page(){
        return this.$store.getters.getCurrentPage
    }
  },
  };
  </script>
