<template>
  <div class="register-component pt-8 pt-16">
    <div class="register-component__content wrapper">
      <nuxt-link to="/" class="flex">
        <h2 class="primary animate__animated" >It</h2>
        <h2 class="text-default animate__animated" >
          Boo.kz
        </h2>
      </nuxt-link>
      <div class="register-component__blocks pt-16">
        <div>
          <h2 class="text-[#000000] pb-8">Қайта келуіңмен</h2>
          <form @submit.prevent="submit" class="register-component__form">
            <input
              type="text"
              v-model="fname"
              class="register-component__input"
              placeholder="Атыңыз"
              autocomplete="off"
              required
            >
            <input
              type="text"
              v-model="lname"
              class="register-component__input"
              placeholder="Жөніңіз"
              autocomplete="off"
              required
            >
            <input
              type="email"
              v-model="email"
              class="register-component__input"
              placeholder="Email"
              autocomplete="nope"
              required
            >
            <input
              type="password"
              v-model="password"
              class="register-component__input"
              placeholder="Құпия сөзіңіз"
              autocomplete="off"
              required
            >
            <input
              type="password"
              v-model="confirm_password"
              class="register-component__input"
              placeholder="Құпия сөзіңізді қайта теріңіз"
              autocomplete="off"
              required
            >
            <button class="button__primary register-component__button">
              Кіру
            </button>
          </form>
          <p class="text-center text-[#000000] pt-4">Есептік жазбаңыз бар ма?</p>
          <nuxt-link to="/login">
            <h3 class="text-center text-[#2079FF] pt-4">Кіру</h3>
          </nuxt-link>
        </div>
        <img src="/icon/register-icon.svg" alt="" style="justify-self: self-end;">
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "register-component",
  data() {
    return {
      fname: "",
      lname: "",
      email: "",
      password: "",
      confirm_password: ""
    }
  },
  methods: {
    async submit() {
      let params = {
        fname: this.fname,
        lname: this.lname,
        email: this.email,
        password: this.password,
        confirm_password: this.confirm_password
      }
      try {
        const res = await axios.post('/register-api.php', params)
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
  }
}
</script>

<style scoped lang="scss">
.register-component {
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
        max-width: 290px ;
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
