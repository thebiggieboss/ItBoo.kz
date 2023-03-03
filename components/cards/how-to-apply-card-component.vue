<template>
  <div class="how-to-apply-card-component">
    <div class="how-to-apply-card-component__content">
      <div class="how-to-apply-card-component__block">
        <p class="text-center text-white">{{cardData.title}}</p>
        <img :src="cardData.icon" alt="" class="max-w-[100px]">
      </div>
      <img src="/icons/next-step.svg" alt="" class="how-to-apply-card-component__img">
    </div>
  </div>
</template>

<script>
export default {
  name: "how-to-apply-card-component",
  props: {
    cardData: {
      type: Object,
      default: () => ({})
    }
  }
}
</script>

<style scoped lang="scss">
.how-to-apply-card-component {
  &__content {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 12px;
    height: 100%;
  }
  &__block {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
    gap: 16px;
    align-items: center;
  }
  &__img {
    align-self: end;
    padding-bottom: 16px;
  }
  &:last-child {
      .how-to-apply-card-component__img {
        visibility: hidden;
    }
  }
  @media screen and (max-width: 1144px){
    &__block {
      height: 180px;
    }
    &:first-child {
      .how-to-apply-card-component__content {
        height: auto;
      }
    }
    &:nth-child(4) {
      grid-row: 2;
      .how-to-apply-card-component__img {
        visibility: visible;
        transform: rotate(180deg);
        padding-top: 16px;
      }
    }
    &:nth-child(3) {
      .how-to-apply-card-component__content {
        column-gap: normal;
      }
      .how-to-apply-card-component__img {
        display: none;
      }
    }
    &:nth-child(2) {
      .how-to-apply-card-component__content {
        display: flex;
        flex-direction: column;
        height: auto;
      }
      .how-to-apply-card-component__img {
        transform: rotate(90deg);
        align-self: center;
        padding: 0;
      }
    }
  }
  @media screen and (max-width: 768px) {
    &__content {
      grid-template-columns: 1fr;
    }
    &__img {
      padding: 0;
      transform: rotate(90deg);
      justify-self: center;
    }
    &:last-child {
      grid-row: auto;
      .how-to-apply-card-component__img {
        visibility: hidden;
      }
    }
    &:nth-child(3) {
      .how-to-apply-card-component__img {
        display: block;
      }
    }
  }
}
</style>
