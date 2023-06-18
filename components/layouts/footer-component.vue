<template>
  <div class="footer-component pt-16 pb-16">
    <div class="footer-component__waves">
      <div class="footer-component__wave" id="wave1"></div>
      <div class="footer-component__wave" id="wave2"></div>
      <div class="footer-component__wave" id="wave3"></div>
      <div class="footer-component__wave" id="wave4"></div>
    </div>
    <div class="footer-component__content wrapper">
      <h2 class="footer-component__title">ItBoo</h2>
      <div class="footer-component__form-block">
        <h3 class="text-[#FFFFFF]">Сұрағыңыз калды ма?</h3>
        <form @submit.prevent="run" class="footer-component__form">
          <input
            required
            v-model="form.email"
            type="email"
            placeholder="Email"
            autocomplete="off"
          />
          <input
            required
            v-model="form.content"
            type="text"
            placeholder="Сипаттама"
            autocomplete="off"
          />
          <button class="button__white">
            Жіберу
          </button>
        </form>
      </div>
      <div class="footer-component__block">
        <h2 class="text-white font-normal">Контактілер</h2>
        <a class="text-white" href="tel:+7 707 707 77 77"> +7 707 707 77 77</a>
        <a class="text-white" href="mailto: info@itBoo.kz">info@itBoo.kz</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "footer-component",
  data() {
    return {
      form: {
        email: "",
        comment: ""
      }
    }
  },
  methods: {
    run() {

    }
  }
}
</script>

<style scoped lang="scss">
.footer-component {
  position: relative;
  background-color: #3586ff;
  .footer-component__content {
    display: flex;
    justify-content: space-between;
    gap: 48px;
  }
  .footer-component__form-block {
    width: 100%;
    max-width: 380px;
    display: grid;
    gap: 20px;
  }
  .footer-component__form {
    display: grid;
    gap: 12px;
    input {
      background-color: #3586ff;
      border: 1px solid #FFFFFF;
      border-radius: 10px;
      font-weight: 400;
      color: white;
    }
    button {
      border-radius: 30px;
    }
  }
  .footer-component__title {
    font-size: 96px;
    color: white;
    align-self: center;
  }
  .footer-component__block {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }
  .footer-component__wave {
    position: absolute;
    top: -60px;
    left: 0;
    width: 100%;
    height: 100px;
    background: url("/images/wave.png");
    background-size: 1000px 100px;
  }

  .footer-component__wave#wave1 {
    z-index: 1000;
    opacity: 1;
    bottom: 0;
    animation: animateWaves 4s linear infinite;
  }

  .footer-component__wave#wave2 {
    z-index: 999;
    opacity: 0.5;
    bottom: 10px;
    animation: animate 4s linear infinite !important;
  }

  .footer-component__wave#wave3 {
    z-index: 1000;
    opacity: 0.2;
    bottom: 15px;
    animation: animateWaves 3s linear infinite;
  }

  .footer-component__wave#wave4 {
    z-index: 999;
    opacity: 0.7;
    bottom: 20px;
    animation: animate 3s linear infinite;
  }

  @keyframes animateWaves {
    0% {
      background-position-x: 1000px;
    }
    100% {
      background-positon-x: 0px;
    }
  }

  @keyframes animate {
    0% {
      background-position-x: -1000px;
    }
    100% {
      background-positon-x: 0px;
    }
  }
  @media screen and (max-width: 960px) {
    .footer-component__content {
      display: grid;
      grid-template-columns: auto 1fr;
      justify-items: center;
    }
  }
  @media screen and (max-width: 768px){
    .footer-component__title {
      display: none;
    }
    .footer-component__content {
      grid-template-columns: 1fr;
    }
  }
}
</style>
