<template>
  <transition name="fade" appear>
    <div class="dialog-component">
      <div class="dialog-component__section">

        <div class="dialog-component__content">
          <button @click="$emit('close')" class="dialog-component__close-button"><img src="/icon/close.svg" alt=""></button>
          <slot />
        </div>
      </div>
      <div class="dialog-component__close-btn" @click="$emit('close')"></div>
    </div>
  </transition>
</template>

<script>
export default {
  name: "dialog-main",
  mounted() {
    this.bodyScroll(true)
  },
  beforeDestroy() {
    this.bodyScroll(false)
  }
}
</script>

<style lang="scss">
.dialog-component {
  position: fixed;
  z-index: 1000;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);
  &__section {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  &__close-btn {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 10;
  }
  &__content {
    z-index: 11;
    position: relative;
    width: 100%;
    max-width: 640px;
    min-height: 360px;
    max-height: 640px;
    height: 100%;
    background-color: white;
    overflow-y: auto;
    box-shadow: 0 0 30px $primary;
    border-radius: $border-radius-secondary;
    .dialog-component__close-button {
      position: absolute;
      top: 16px;
      right: 16px;
      width: 48px;
      height: 48px;
      padding: 8px;
    }
  }
  .dialog-center {
    text-align: center;
  }
  @media screen and (max-width: 768px) {
    &__content {
      max-height: 100%;
      border: none;
      border-radius: 0;
      .dialog-component__close-button {
        width: 40px;
        height: 40px;
        top: 8px;
        right: 8px;
      }
    }
  }
}
</style>
