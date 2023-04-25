<template>
  <template v-if="!isAuth">
    <header>
      <guest-nav-bar></guest-nav-bar>
    </header>
  </template>

  <template v-if="isAuth">
    <header>
      <user-nav-bar></user-nav-bar>
    </header>
  </template>

  <main>
    <router-view></router-view>
  </main>
</template>

<script>
import Topbar from "./components/Topbar.vue";
import UserNavbar from "./components/UserNavbar.vue";

export default {
  components: {
    "guest-nav-bar": Topbar,
    "user-nav-bar": UserNavbar
  },
  computed: {
    isAuth(){
      return this.$store.state.user.isUserAuth
    },
  },
  created(){
    if (localStorage.getItem('jft_jwt')) {
      return this.$store.commit("setUserAuthTrue")
    }
    else {
      return this.$store.commit("setUserAuthFalse")
    }
  },
};
</script>

<style scoped></style>
