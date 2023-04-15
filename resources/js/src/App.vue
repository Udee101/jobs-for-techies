<template>
    <header>
        <top-bar></top-bar>
    </header>
    <div>
        <!-- <hero-section></hero-section> -->
        <router-view></router-view>
    </div>
</template>

<script>
// import Hero from "./components/Hero.vue";
import Topbar from "./components/Topbar.vue";

export default {
    components: {
        // "hero-section": Hero,
        "top-bar": Topbar,
    },
};
</script>

<style scoped></style>
