<template>
  <div>
    <register-component />
  </div>
</template>

<script>
import RegisterComponent from "~/components/blocks/register-component.vue";

export default {
  name: "register",
  components: {RegisterComponent},
  layout: "guest",
}
</script>

<style scoped>

</style>
