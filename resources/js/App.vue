<template>
  <header>
    <top-bar :isAuth="isAuth"></top-bar>
  </header>
  <main>
    <router-view @update-navbar="authenticate"></router-view>
  </main>
</template>

<script>
import Topbar from "./components/Topbar.vue";

export default {
  components: {
    "top-bar": Topbar,
  },
  data() {
    return {
      isAuth: false
    }
  },
  methods: {
    authenticate(){
      this.isAuth = true;
    }
  },
  mounted() {
    if (localStorage.getItem('authenticated')) {
      this.isAuth = true
    }
    else{
      this.isAuth = false
    }
  },
};
</script>

<style scoped></style>
