<template>
  <div class="default-layout">
    <div>
      <header-component />
      <Nuxt />
    </div>
    <footer-component />
  </div>
</template>

<script>
import HeaderComponent from "~/components/layouts/header-component.vue";
import FooterComponent from "~/components/layouts/footer-component.vue";

export default {
  name: "default",
  components: {FooterComponent, HeaderComponent}
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
