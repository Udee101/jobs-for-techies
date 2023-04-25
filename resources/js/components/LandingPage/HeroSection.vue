<template>
  <section class="hero" id="home">
    <div class="component-wrapper">
      <div class="hero-intro text-center">
        <p class="hero-text text-xxl">Get The <span class="text-color-1">Right Job </span>You Deserve
        </p>

        <p class="hero-sub-text text-md my-1">Lots of jobs &amp; Several candidates are registered</p>
      </div>

      <div class="hero-cta text-center">
        <a href="#jobs" class="find-jobs font-bold hover-opacity" >Find Jobs</a>

        <router-link v-if="!isAuth" :to="{name: 'register'}" class="sign-up hover-opacity">Become a member</router-link>

        <template v-if="isAuth">
          <router-link :to="{name: 'allListings'}" class="sign-up hover-opacity">Post a job</router-link>
        </template>

      </div>
    </div>
  </section>
</template>

<script>
  export default {
    computed: {
      isAuth(){
        return this.$store.state.user.isUserAuth
      }
    },
  }
</script>

<style scoped>
</style>
