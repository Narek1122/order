<template>
    <v-card
      class="mx-auto"
      max-width="800"
    >
      <v-card-text>
        <!-- <div>Create Order</div> -->
            <v-text-field
            label="Product Name"
            required
            ></v-text-field>

            <v-text-field
            label="Weight"
            type="number"
            />

            <v-textarea
            name="input-7-1"
            filled
            label="Description"
            auto-grow
            ></v-textarea>

            <v-text-field
            label="Total Price"
            type="number"
            required
            />

      </v-card-text>
      <v-card-actions>
        <v-btn
          text
          color="teal accent-4"
        >
          Save
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
  name: 'CreateComponent',
  data: () => ({
    items: {}
  }),
};
</script>
