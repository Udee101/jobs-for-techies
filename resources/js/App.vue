<template>
  <header>
    <top-bar></top-bar>
  </header>
  <main>
    <router-view></router-view>
  </main>
</template>

<script>
import Topbar from "./components/Topbar.vue";

export default {
  components: {
    "top-bar": Topbar,
  },
};
</script>

<style scoped></style>
