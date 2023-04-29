<template>
  <div class="scroll-up-component">
    <div class="scroll-up-component__content" @click="scrollTop">
      <img src="/icon/scroll-up.svg" alt="">
    </div>
  </div>
</template>

<script>
export default {
  name: "scroll-up-component",
  methods: {
    scrollTop() {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    },
  },
}
</script>

<style scoped lang="scss">
.scroll-up-component {
  //position: fixed;
  //bottom: 50px;
  //right: 50px;
  display: flex;
  justify-content: flex-end;
  padding-right: 50px;
  &__content {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 65px;
    height: 65px;
    background: #2079FF;
    border-radius: 100%;
    cursor: pointer;
    transition: all .3s linear;
    border: none;
    padding: 15px;
    margin-top: 10px
  }
}
</style>
