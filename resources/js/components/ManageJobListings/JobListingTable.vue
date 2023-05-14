<template>
  <table>
    <thead class="text-md text-color-3">
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Company</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody class="text-color-3">
      <jobs-table-row
        v-for="(listing, index) in listings"
        :listing="listing"
        :index="index"
        v-bind:key="index"
      >
      </jobs-table-row>
    </tbody>
  </table>
</template>

<script>
import { mapState } from 'vuex'
import JobListingTableRow from './JobListingTableRow.vue';
export default {
  components: {
    "jobs-table-row": JobListingTableRow
  },

  created() {
    this.$store.dispatch("jobListing/fetUserJobListings")
  },

  components:{
    "jobs-table-row": JobListingTableRow
  },

  computed: {
    ...mapState({
      listings: (state) => state.jobListing.userListings
    })
  },
};
</script>

<style ></style>
