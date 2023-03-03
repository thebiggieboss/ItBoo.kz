<template>
  <div class="footer-component pt-16 pb-16">
    <div class="footer-component__content wrapper">
      <div class="grid gap-4">
        <h3 class="text-white font-normal cursor-pointer">Курс</h3>
        <h3 class="text-white font-normal cursor-pointer">Қалай төлеу керек</h3>
        <h3 class="text-white font-normal cursor-pointer">Контактілер</h3>
      </div>
      <div class="footer-component__content--icons">
        <img src="/icons/instagram-icon.svg" alt="">
        <img src="/icons/telegram-icon.svg" alt="">
        <img src="/icons/youtube-icon.svg" alt="">
      </div>
      <div class="grid gap-4">
        <h2 class="text-white font-normal">Контактілер</h2>
        <div class="flex gap-2 flex-col">
          <a class="text-white" href="tel:+7 707 707 77 77"> +7 707 707 77 77</a>
          <a class="text-white" href="mailto: info@itBoo.kz">info@itBoo.kz</a>
        </div>
        <div class="flex gap-2 flex-col">
          <p>© 2023 «itBoo.kz»</p>
          <p>Жария офферта шарты</p>
        </div>
      </div>
    </div>
    <div class="footer-component--mobile wrapper">
      <div class="footer-component--mobile__des">
        <div class="flex flex-col gap-4">
          <h3 class="text-white font-normal cursor-pointer" v-html="'Курс'"></h3>
          <h3 class="text-white font-normal cursor-pointer">Қалай төлеу керек</h3>
<!--          <h3 class="text-white font-normal">Контактілер</h3>-->
        </div>
        <div class="grid gap-4">
          <h2 class="text-white font-normal cursor-pointer">Контактілер</h2>
          <div class="flex gap-2 flex-col">
            <a class="text-white cursor-pointer" href="tel:+7 707 707 77 77"> +7 707 707 77 77</a>
            <a class="text-white cursor-pointer" href="mailto: info@itBoo.kz">info@itBoo.kz</a>
          </div>
        </div>
      </div>
      <div class="footer-component__content--icons">
        <img src="/icons/instagram-icon.svg" alt="">
        <img src="/icons/telegram-icon.svg" alt="">
        <img src="/icons/youtube-icon.svg" alt="">
      </div>
      <div class="flex gap-2 flex-col justify-self-end">
        <p>© 2023 «itBoo.kz»</p>
        <p>Жария офферта шарты</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "footer-component"
}
</script>

<style scoped lang="scss">
.footer-component {
  background-color: $primary;
  .footer-component__content {
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: 48px;
    &--icons {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      align-content: center;
      justify-items: center;
      img {
        cursor: pointer;
      }
    }
  }
  .footer-component--mobile {
    display: none;
    grid-template-columns: 1fr;
    gap: 48px;
    &__des {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
      div:last-child {
        justify-content: end;
      }
      @media screen and (max-width: 500px) {
        h3, h2 {
          font-size: 16px;
        }
      }
    }
  }
  @media screen and (max-width: 960px) {
    .footer-component__content {
      display: none;
    }
    .footer-component--mobile {
      display: grid;
    }
  }
}
</style>
