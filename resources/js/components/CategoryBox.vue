<template>
  <div class="category-box">
    <img :src="category.imgSrc" alt="image" class="py-1">
    <p class="mb-1 text-md ">{{ category.title }}</p>
  </div>
</template>

<script>
  export default {
    props: {
      category: {
        type: Object
      }
    }
  }
</script>

<style scoped>
.category-box{
  background: var(--color-5);
  border-radius: 1rem;
  display: flex;
  flex-direction: column;
  place-content: center;
  place-items: center;
  padding: 0.5rem;
}
.category-box>img{
  width: 2.5rem;
}

</style>