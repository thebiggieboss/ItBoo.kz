<template>
  <div class="footer-foot-component">
    <div class="footer-foot-component__content wrapper">
      <p class="footer-foot-component__des">© 2023 «itBoo.kz»</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "footer-foot-component",
}
</script>

<style scoped lang="scss">
.footer-foot-component {
  background-color: #000000;
  height: 75px;
  &__content {
    height: 100%;
  }
  &__des {
    height: 100%;
    color: white;
    display: flex;
    justify-content: flex-end;
    align-items: center;
  }
}
</style>
