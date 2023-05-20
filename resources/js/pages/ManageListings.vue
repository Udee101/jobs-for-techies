<template>
  <div class="manage-jobs-wrapper">
    <div class="page-container">
      <div class="page-title my-1">
        <p class="text-xxl text-center">Manage Jobs</p>
      </div>

      <div class="overflow-x-auto py-1">
        <job-listing-table></job-listing-table>
      </div>
    </div>
  </div>
</template>

<script>
import JobListingTable from '../components/ManageJobListings/JobListingTable.vue';
export default {
  components: {
    "job-listing-table": JobListingTable
  }
}
</script>

<style>
</style>
