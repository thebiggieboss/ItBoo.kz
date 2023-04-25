<template>
  <div class="how-to-apply-component pb-16 pt-16">
    <div class="how-to-apply-component__content wrapper overflow-x-hidden" ref="apply-parent">
      <h2 class="text-white pb-16">Сұраныс қалдыру жолы</h2>
      <div class="how-to-apply-component__container animate__animated" ref="apply-content">
        <div class="how-to-apply-component__blocks">
          <how-to-apply-card-component v-for="(item, index) in steps" :key="index" :card-data="item"/>
        </div>
        <div class="how-to-apply-component__buttons pl-8">
          <button class="button__primary">
            Telegram
          </button>
          <button class="button__green">
            WhatsApp
          </button>
        </div>
      </div>
    </div>
    <elements-scroll-up-component />
  </div>
</template>

<script>
import HowToApplyCardComponent from "~/components/cards/how-to-apply-card-component.vue";
import {observerAnimate} from "~/modules/Observer";

export default {
  name: "how-to-apply-component",
  components: {HowToApplyCardComponent},
  data() {
    return {
      steps: [
        {
          title: 'Біздің контактімізге жазу',
          icon: '/icons/step1-icon.svg'
        },
        {
          title: 'Менеджермен кеңесу, сатып алынатын өнімнің мәліметтерін дауыстау',
          icon: '/icons/step2-icon.svg'
        },
        {
          title: 'Ұсынылған әдіс бойынша төлеу',
          icon: '/icons/step3-icon.svg'
        },
        {
          title: 'Үйренуді бастау',
          icon: '/icons/step4-icon.svg'
        },
      ]
    }
  },
  mounted() {
    observerAnimate(this.$refs["apply-parent"], this.$refs["apply-content"], 'animate__fadeInLeft')
  }
}
</script>

<style scoped lang="scss">
.how-to-apply-component {
  background: linear-gradient(180deg, #000000 0%, #2079FF 120%);
  backdrop-filter: blur(5px);
  &__content {
    height: 100%;
    min-height: 500px;
  }
  &__blocks {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
  }
  &__container {
    display: grid;
    grid-template-columns: 1fr;
    gap: 32px;
  }
  &__buttons {
    display: grid;
    gap: 12px;
    button {
      max-width: 200px;
      border-radius: $border-radius-secondary;
    }
  }
  @media screen and (max-width: 1144px) {
    min-height: 950px;
    &__blocks {
      grid-template-columns: 1fr 1fr;
    }
    &__buttons {
      grid-row: 1;
    }
  }
  @media screen and (max-width: 768px) {
    &__blocks {
      grid-template-columns: 1fr;
      gap: 16px;
    }
    &__buttons  {
      padding: 0;
      grid-template-columns: 1fr 1fr;
      button:last-child {
        justify-self: end;
      }
    }

  }
}
</style>
