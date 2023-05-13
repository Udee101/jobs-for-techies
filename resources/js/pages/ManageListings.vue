<template>
  <div class="manage-jobs-wrapper">
    <div class="manage-jobs-container">
      <div class="page-title my-1">
        <p class="text-xxl text-center">Manage Jobs</p>
      </div>

      <div class="overflow-x-auto py-1">
        <table>
          <thead class="text-md text-color-3">
            <tr>
              <th>#</th>
              <th>Tiltle</th>
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
      </div>
    </div>
  </div>
</template>

<script>
import JobListingTableRow from '../components/ManageJobListings/JobListingTableRow.vue'
import { mapState } from 'vuex'
  export default {
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
  }
</script>

<style>
</style>
