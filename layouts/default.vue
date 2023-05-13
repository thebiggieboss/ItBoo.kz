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
import axios from "axios";

export default {
  name: "default",
  components: {FooterComponent, HeaderComponent},
  async created() {
    try {
      const res = await axios.get('/get-session-api.php')
      await this.$store.dispatch('user/setUser', {
        user: res.data.user,
      })
    } catch (e) {
      console.log(e)
    }
  }
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
