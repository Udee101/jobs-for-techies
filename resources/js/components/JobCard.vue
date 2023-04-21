<template>
  <div class="job-box scale">
    <div class="comp-img">
      <img :src="CompImg" alt="">
    </div>

    <div class="detail-wrapper">
      <p class="comp-name text-lg">{{ job.company }}</p>

      <div class="job-type">
        <p class="type text-base">Fulltime.</p>
        <p class="job-loc"><f-a-i icon="fas fa-location-dot" class="text-color-9" /> {{ job.location }}</p>
      </div>

      <p class="comp-title text-md my-1">{{ job.title }}</p>

      <div class="comp-tags mb-1">
        <span>tags: </span>
        <div v-for="(tag, i) in formatedJobTags" :key="i">
          <p class="text-sm text-color-3">{{ tag }}</p>
        </div>
      </div>

      <router-link :to="{name: 'landing'}" class="text-color-4 view-job hover-opacity">View Job</router-link>

    </div>
  </div>
</template>

<script>
import CompImg from '../../img/j4logo.svg'
  export default {
    props: {
      job: {
        type: Object
      }
    },
    data() {
      return {
        CompImg
      }
    },
    computed: {
      formatedJobTags() {
        const tagsArray = this.job.tags.split(',');
        return tagsArray;
      }
    }
  }
</script>

<style scoped>
</style>
