<template>
    <v-card
      class="mx-auto"
      max-width="900"
    >
      <v-card-text>
        <p class="text-h4 text--primary">
            {{ data.product_name }}
        </p>
        <p>Weight - {{ data.weight }}</p>
        <div class="text--primary">
          Decription - {{ data.decription }}
        </div>
        <p>Total Price - {{ data.total_price }}</p>
      </v-card-text>
      <v-card-actions>
        <v-btn
          text
          color="teal accent-4"
          @click="reveal = true"
        >
          Learn More
        </v-btn>
      </v-card-actions>

      <v-expand-transition>
        <v-card
          v-if="reveal"
          class="transition-fast-in-fast-out v-card--reveal"
          style="height: 100%;"
        >
          <v-card-text class="pb-0">
            <p class="text-h4 text--primary">
              Origin
            </p>
            <p>late 16th century (as a noun denoting a place where alms were distributed): from medieval Latin eleemosynarius, from late Latin eleemosyna ‘alms’, from Greek eleēmosunē ‘compassion’ </p>
          </v-card-text>
          <v-card-actions class="pt-0">
            <v-btn
              text
              color="teal accent-4"
              @click="reveal = false"
            >
              Close
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-expand-transition>
    </v-card>
  </template>

<script>
export default {
  name: 'OrderComponent',
  data: () => ({
    items: {}
  }),
  props: {
    data: {
      type: Object, default: () => {
      }
    }
  },
};
</script>
