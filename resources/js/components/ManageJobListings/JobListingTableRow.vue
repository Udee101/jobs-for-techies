<template>
  <edit-listing-pop-up 
    v-if="showModal"
    @close="showModal = false"
    :listingId="listing.id"
  >
  </edit-listing-pop-up>
  
  <confirmation-pop-up 
    v-if="showConfirm" 
    :confirmationText="'Are you sure you want to delete this job?'"
    @close="showConfirm = false"
    @delete="deleteJob"
  >
  </confirmation-pop-up>
  <tr>
    <td>{{ index + 1 }}</td>
    <td>{{ listing.title }}</td>
    <td>{{ listing.company }}</td>
    <td @click="showModal = true">
      <p class="edit text-center text-color-4 cursor-pointer hover-opacity">Edit</p>
    </td>
    <td @click="showConfirm = true" class="text-center">
      <p 
        v-if="!isLoading" 
        class="delete text-center text-error cursor-pointer hover-opacity"
      > Delete
      </p>
      <f-a-i 
        v-if="isLoading" 
        icon="fas fa-circle-notch" 
        spin 
        size="xl"
        class="text-color-9 text-center my-1" />
    </td>
  </tr>
</template>

<script>
import EditListingPopUp from '../popups/EditListingPopUp.vue'
import ConfirmationPopUp from '../popups/ConfirmationPopUp.vue'
import { deleteJobListing } from '../../api/listings'

export default {
  components: {
    "edit-listing-pop-up": EditListingPopUp,
    "confirmation-pop-up": ConfirmationPopUp
  },
  props: {
    listing: {
      type: Object
    },
    index: {
      type: Number
    }
  },
  data() {
    return {
      showModal: false,
      showConfirm: false,
      isLoading: false
    }
  },
  methods: {
    deleteJobListing,
    deleteJob(){
      this.isLoading = true;
      this.showConfirm = false;
      this.deleteJobListing(this.listing.id).then((res) => {

        setTimeout(() => {
          this.isLoading = false
          this.$store.dispatch("jobListing/fetUserJobListings")
        }, 2000)

      }).catch((err) => console.log(err.response))
    }
  },
};
</script>

<style scoped>
td>.edit, td>.delete{
  border-radius: 0.2rem;
  padding: 0.1rem 0.5rem;
}
td>.edit{
  border: 1px solid var(--color-4);
}
td>.delete{
  border: 1px solid var(--color-error);
}
</style>
