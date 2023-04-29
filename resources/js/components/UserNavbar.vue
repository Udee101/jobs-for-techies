<template>
  <nav>
    <div class="nav-container">
      <div class="logo text-md font-bold">
        <a href="/"><img :src="LogoImg" alt="logo image"></a>
      </div>

      <div class="nav-menu">
        <ul>
          <router-link :to="{name: 'allListings'}" class="text-color-3 hover-opacity mr-1">Jobs</router-link>

          <router-link :to="{name: 'manageListings'}" class="text-color-3 hover-opacity mr-1">Manage Jobs</router-link>

          <router-link :to="{name: 'profile'}" class="text-color-3 hover-opacity">Profile</router-link>
        </ul>
      </div>

      <div class="user text-md">
        {{ getUsername }} <f-a-i icon="fas fa-user" class="text-color-1" />
      </div>
    </div>
  </nav>
</template>

<script>
import LogoImg from '../../img/logo.svg'

export default {
  created() {
    this.$store.dispatch("fetchUser")
  },
  
  computed: {
    getUsername() {
      return this.$store.state.user.user.first_name
    }
  },
  
  data() {
    return {
      LogoImg,
    }
  },


};
</script>

<style scoped></style>
