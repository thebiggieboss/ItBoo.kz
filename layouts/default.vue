<template>
  <div class="default-layout">
    <div>
      <header-component />
      <Nuxt />
    </div>
    <footer-component />
    <footer-foot-component />
  </div>
</template>

<script>
import HeaderComponent from "~/components/layouts/header-component.vue";
import FooterComponent from "~/components/layouts/footer-component.vue";
import axios from "axios";
import FooterFootComponent from "~/components/layouts/footer-foot-component.vue";

export default {
  name: "default",
  components: {FooterFootComponent, FooterComponent, HeaderComponent},
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
