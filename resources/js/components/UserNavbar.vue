<template>
  <nav>
    <div class="nav-container">
      <div class="logo text-md font-bold">
        <a href="/"><img :src="LogoImg" alt="logo image"></a>
      </div>

      <div class="nav-menu">
        <ul>
          <a href="#home" class="text-color-3"><li>Home</li></a>
          <a href="categories" class="text-color-3"
            ><li>Categories</li></a
          >
          <a href="jobs" class="text-color-3"><li>Jobs</li></a>
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
