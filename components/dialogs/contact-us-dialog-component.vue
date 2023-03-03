<template>
  <div class="contact-us-dialog">
    <form @submit.prevent="run" class="contact-us-dialog__form">
      <input
        required
        v-model="clientFullName"
        type="text"
        placeholder="Аты-Жөні"
      />
      <the-mask
        required
        v-model="clientPhone"
        :mask="'+7 (###) ### ## ##'"
        type="text"
        pattern="[\+][7]\s[(][0-9]{3}[)]\s[0-9]{3}\s[0-9]{2}\s[0-9]{2}"
        placeholder="Телефон нөмірі"
      />
      <input
        required
        v-model="clientMail"
        type="text"
        placeholder="Пошта"
      />
      <div class="contact-us-dialog__network">
        <img src="/icons/modal-inst.svg" alt="">
        <img src="/icons/modal-telaga.svg" alt="">
        <img src="/icons/modal-whatsapp.svg" alt="">
      </div>
      <button class="button__primary self-end">
        Сұраныс қалдыру
      </button>
    </form>
  </div>
</template>

<script>
import {TheMask} from 'vue-the-mask'
export default {
  name: "contact-us-dialog-component",
  components: {
    TheMask
  },
  data() {
    return {
      clientFullName: '',
      clientPhone: '',
      clientMail: ''
    }
  },
  methods: {
    run() {

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
  }
}
</style>
