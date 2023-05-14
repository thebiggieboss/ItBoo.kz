<template>
  <div class="main-head-component" ref="main-parent">
    <div class="main-head-component__content animate__animated" ref="main-content">
      <div class="main-head-component__head-text px-2">
        <h2 class="text-white pb-6">Технологияны меңгеру</h2>
        <h3 style="color: #B0B0B0" class="pb-6">IT мамандықтары бойынша кең ауқымды бағдарламалау курстарынан таңдау жасаңыз</h3>
        <button class="button__primary" @click="dialogMain = true">Бастау</button>
      </div>
    </div>
    <dialog-main v-if="dialogMain" @close="dialogMain = false">
      <contact-us-dialog-component />
    </dialog-main>
  </div>
</template>

<script>
import {observerAnimate} from "~/modules/Observer";
import DialogMain from "~/components/dialogs/index.vue";
import ContactUsDialogComponent from "~/components/dialogs/contact-us-dialog-component.vue";

export default {
  name: "main-head-component",
  components: {ContactUsDialogComponent, DialogMain},
  data() {
    return {
      dialogMain: false
    }
  },
  mounted() {
    observerAnimate(this.$refs["main-parent"], this.$refs["main-content"], 'animate__fadeIn')
  }
}
</script>

<style scoped lang="scss">
.main-head-component {
  background-image: url("/gif/itboo-bg.gif");
  background-size:100%;
  background-repeat: no-repeat;
  //background-attachment: fixed;
  width:100%;
  display: grid;
  grid-template-columns: 1fr 1fr;
  .main-head-component__content {
    min-height: 720px;
    background-color: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(5px);
    display: grid;
    align-content: center;
  }
  .main-head-component__head-text {
    max-width: 400px;
    margin: 0 auto;
  }
  @media screen and (max-width: 1500px) {
    background-size: cover;
    background-position: center;
  }
  @media screen and (max-width: 768px) {
      grid-template-columns: 1fr;
    .main-head-component__content {
      padding: 0;
    }
    .main-head-component__head-text {
      h2 {
        text-align: center;
        font-size: 32px;
      }
      h3 {
        text-align: center;
        font-size: 16px;
      }
    }
  }
}
</style>
