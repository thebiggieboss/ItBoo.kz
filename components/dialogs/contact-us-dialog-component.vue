<template>
  <div class="contact-us-dialog">
    <form @submit.prevent="formSubmit" class="contact-us-dialog__form">
      <input
        required
        v-model="fname"
        type="text"
        placeholder="Аты"
        name="fname"
      />
      <input
        required
        v-model="lname"
        type="text"
        placeholder="Тегі"
        name="lname"
      />
      <the-mask
        required
        v-model="phone"
        :mask="'+7 (###) ### ## ##'"
        type="text"
        pattern="[\+][7]\s[(][0-9]{3}[)]\s[0-9]{3}\s[0-9]{2}\s[0-9]{2}"
        placeholder="Whatsapp телефон нөмірі"
        name="phone"
      />
      <input
        required
        v-model="email"
        type="text"
        placeholder="Пошта"
        name="email"
      />
      <input
        required
        v-model="promo"
        type="text"
        placeholder="Промо код"
        name="promo"
      />
      <input
        required
        v-model="password"
        type="text"
        placeholder="Құпия сөзіңіз"
        name="password"
      />
      <div class="aselect" :data-value="'Курс'" :data-list="listSelects">
        <div class="selector" @click="visible = !visible">
          <div class="label">
            <span>{{ value }}</span>
          </div>
          <div class="arrow" :class="{ expanded : visible }"></div>
          <div :class="{ hidden : !visible, visible }">
            <ul>
              <li :class="{ current : item === value }" v-for="item in list" @click="select(item)">{{ item }}</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="contact-us-dialog__network">
        <img src="/icon/modal-inst.svg" alt="">
        <img src="/icon/modal-telaga.svg" alt="">
        <img src="/icon/modal-whatsapp.svg" alt="">
      </div>
      <button class="button__primary self-end" type="submit">
        Сұраныс қалдыру
      </button>
    </form>
  </div>
</template>

<script>
import {TheMask} from 'vue-the-mask'
import axios from "axios";

export default {
  name: "contact-us-dialog-component",
  components: {
    TheMask
  },
  data() {
    return {
      fname: '',
      lname: '',
      phone: '',
      email: '',
      promo: '',
      book: 1,
      password: '',
      listSelects: [
        {
          title: "Машинаны үйрету",
          value: "1"
        },
        {
          title: "Python бастауыш курсы",
          value: "2"
        },
        {
          title: "Python жалғастырушы курсы",
          value: "3"
        },
        {
          title: "C++ бастауыш курсы",
          value: "4"
        },
        {
          title: "SQL бастауыш курсы",
          value: "5"
        },
        {
          title: "JavaScript бастауыш курсы",
          value: "6"
        },
        {
          title: "Машинаны үйрету бастауыш курсы",
          value: "7"
        },
      ],
      visible: false
    }
  },
  methods: {
    async formSubmit() {
      let data = {
        fname: this.fname,
        lname: this.lname,
        phone: this.phone,
        email: this.email,
        promo: this.promo,
        book: 1,
        password: this.password,
      }
      try {
        const res = await axios.post('/form-buy-api.php', data)
        console.log(res)
      } catch (e) {
        console.log(e)
      }
    }
  }
}
</script>

<style scoped lang="scss">
.contact-us-dialog {
  width: 100%;
  max-width: 520px;
  padding: 64px 24px;
  margin: 0 auto;
  .contact-us-dialog__form {
    display: grid;
    grid-template-rows: repeat(4, max-content);
    gap: 24px;
    margin: 24px 0;
    button {
      border-radius: $border-radius-secondary;
    }
  }
  .contact-us-dialog__network {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    justify-items: center;
    img {
      width: 60px;
      height: 60px;
    }
  }
}

</style>
