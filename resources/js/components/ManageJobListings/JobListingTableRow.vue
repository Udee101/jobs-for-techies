<template>
  <tr>
    <td>{{ index + 1 }}</td>
    <td>{{ listing.title }}</td>
    <td>{{ listing.company }}</td>
    <td class="text-color-4 cursor-pointer hover-opacity">
      <f-a-i icon="fas fa-pen-to-square" /> Edit
    </td>
    <td class="text-error cursor-pointer hover-opacity">
      <f-a-i icon="fas fa-trash-alt" /> Delete
    </td>
  </tr>
</template>

<script>
export default {
  props: {
    listing: {
      type: Object
    },
    index: {
      type: Number
    }
  },
};
</script>

<style scoped>
</style>
