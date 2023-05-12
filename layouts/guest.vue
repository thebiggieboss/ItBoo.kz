<template>
  <div class="default-layout">
    <Nuxt />
  </div>
</template>

<script>
export default {
  name: 'guest-layout'
}
</script>
<style scoped>
.default-layout {
  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: 1fr auto;
  min-height: 100vh;
  height: 100%;
}
</style>

