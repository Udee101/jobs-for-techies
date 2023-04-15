<template>
    <div>
        <h1>Hello</h1>
        <hero-section></hero-section>
    </div>
</template>

<script>
import Hero from "./components/Hero.vue";

export default {
    components: {
        "hero-section": Hero,
    },
};
</script>

<style scoped></style>
