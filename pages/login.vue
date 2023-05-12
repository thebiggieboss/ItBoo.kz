<template>
  <div>
    <login-component />
  </div>
</template>

<script>
import LoginComponent from "~/components/blocks/login-component.vue";

export default {
  name: "login",
  components: {LoginComponent},
  layout: "guest",
}
</script>

<style scoped>

</style>
