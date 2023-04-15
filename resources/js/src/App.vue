<template>
    <div>
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
