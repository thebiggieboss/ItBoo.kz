<template>
  <div class="login-component pt-8 pb-16">
    <div class="login-component__content wrapper">
      <nuxt-link to="/" class="flex">
        <h2 class="primary animate__animated" >It</h2>
        <h2 class="text-default animate__animated" >
          Boo.kz
        </h2>
      </nuxt-link>
      <div class="login-component__blocks">
        <div>
          <h2 class="text-[#000000] pb-8">Қайта келуіңмен</h2>
          <form @submit.prevent="submit" class="login-component__form">
            <input
              type="email"
              v-model="email"
              class="login-component__input"
              placeholder="Email"
              autocomplete="nope"
              required
              name="email"
            >
            <input
              type="password"
              v-model="password"
              class="login-component__input"
              placeholder="Құпия сөзіңіз"
              autocomplete="off"
              required
              name="password"
            >
            <button class="button__primary login-component__button">
              Кіру
            </button>
          </form>
          <p class="text-center text-[#000000] pt-4">Есептік жазбаңыз жоқ па?</p>
          <nuxt-link to="/register">
            <h3 class="text-center text-[#2079FF] pt-4">Тіркеу</h3>
          </nuxt-link>
        </div>
        <img src="/icon/login-icon.svg" alt="" style="justify-self: self-end;">
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "login-component",
  data() {
    return {
      email: "",
      password: ""
    }
  },
  methods: {
    async submit() {
      try {
        const res = await axios.post('/login-api.php', {
          email: this.email,
          password: this.password
        })
        if(res.data.status) {
          await this.$router.push('/')
          await this.$store.dispatch('user/setUser', {
            user: res.data.user,
          })
        }
        this.$toast.open({
          message: res.data.message,
          type: res.data.status ? "success" : "warning"
        })
      } catch (e) {
        this.$toast.open({
          message: e.message,
          type: "error"
        })
      }
    }
  },
}
</script>

<style scoped lang="scss">
.login-component {
  &__content {

  }
  &__blocks {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
    align-items: center;
  }
  &__form {
    display: grid;
    gap: 16px;
  }
  &__input {
    background-color: #E4F6FE;
    border-radius: 30px;
    height: 64px;
    border: none;
    font-size: 22px;
  }
  &__button {
    border-radius: 30px;
    height: 64px;
    font-size: 24px;
  }
  @media screen and (max-width: 968px) {
    &__blocks {
      padding-top: 32px;
      grid-template-columns: 1fr;
      img {
        justify-self: center !important;
        width: 100%;
        max-width: 400px ;
      }
    }
    &__input {
      height: 48px;
      font-size: 16px;
      border-radius: 10px;
    }
    &__button {
      height: inherit;
      font-size: inherit;
      border-radius: 10px;
    }
  }
}
</style>
