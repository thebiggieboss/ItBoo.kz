<template>
  <div class="contact-us-dialog">
    <h3 class="text-center text-[#5a5a5a]">Сұраныс қалдыру</h3>
    <form @submit.prevent="formSubmit" class="contact-us-dialog__form">
      <input
        required
        v-model="fname"
        type="text"
        placeholder="Аты"
        name="fname"
        autocomplete="off"
      />
      <input
        required
        v-model="lname"
        type="text"
        placeholder="Тегі"
        name="lname"
        autocomplete="off"
      />
      <the-mask
        required
        v-model="phone"
        :mask="'+7 (###) ### ## ##'"
        type="text"
        pattern="[\+][7]\s[(][0-9]{3}[)]\s[0-9]{3}\s[0-9]{2}\s[0-9]{2}"
        placeholder="Whatsapp телефон нөмірі"
        name="phone"
        autocomplete="off"
      />
      <div class="contact-us-dialog__columns">
        <input
          required
          v-model="email"
          type="email"
          placeholder="Пошта"
          name="email"
          autocomplete="off"
        />
        <input
          required
          v-model="password"
          type="password"
          placeholder="Құпия сөзіңіз"
          name="password"
          autocomplete="off"
        />
      </div>
      <div class="contact-us-dialog__columns">
        <input
          v-model="promo"
          type="text"
          placeholder="Промо код"
          name="promo"
          autocomplete="off"
        />
        <v-select
          v-model="book"
          :options="listSelects"
          :reduce="(books) => books.value"
          label="title"
          placeholder="Курс"
          append-to-body
          class="vue-select__select"
        >
          <template #search="{attributes, events}">
            <input
              class="vs__search"
              :required="!book"
              v-bind="attributes"
              v-on="events"
            />
          </template>
        </v-select>
      </div>
      <div class="contact-us-dialog__network">
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
import vSelect from "vue-select";
import 'vue-select/dist/vue-select.css';
import axios from "axios";

export default {
  name: "contact-us-dialog-component",
  components: {
    TheMask,
    vSelect
  },
  data() {
    return {
      fname: '',
      lname: '',
      phone: '',
      email: '',
      promo: '',
      book: '',
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
        phone: `8${this.phone}`,
        email: this.email,
        promo: this.promo,
        book: this.book,
        password: this.password,
      }
      try {
        const res = await axios.post('/form-buy-api.php', data)
        console.log(res)
        if(res.data.success) {
          await this.$router.push({ path: '/inform', query: { book: res.data.book, order: res.data.order_no, promo: res.data.promo } });
          this.$toast.open({
            message: res.data.message,
            type: "success"
          })
        }
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
.contact-us-dialog {
  width: 100%;
  max-width: 520px;
  padding: 32px 24px;
  margin: 0 auto;
  .contact-us-dialog__form {
    display: grid;
    grid-template-rows: repeat(4, max-content);
    gap: 16px;
    margin: 24px 0;
    button {
      border-radius: $border-radius-secondary;
    }
  }
  .contact-us-dialog__columns {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }
  .contact-us-dialog__network {
    display: flex;
    justify-content: flex-end;
    gap: 12px;
    img {
      width: 32px;
      height: 32px;
    }
  }
}

</style>
