<template>
  <div class="inform-component pb-16 pt-16" v-if="!!priceBook">
    <div class="inform-component__content wrapper">
      <h2 class="text-center pb-4">Тапсырысыңыз қабылданды</h2>
      <div class="inform-component__block">
        <div class="grid gap-1">
          <p>Кітап бағасы: <span class="text-[#FF4242]">{{priceBook.price}}</span></p>
          <p>Мына Kaspi картасына төлем ақы жасай аласыз. <br> <span class="text-[#FF4242]">4400 4301 6276 0281 (Мағжан Қ)</span></p>
          <p>Төлем ақы жасағанда тапсырыс нөмірін жазып жіберіңіз.</p>
        </div>
        <div>
          <p class="pb-3">Тапсырыс нөмірі: </p>
          <h3 class="text-[#FF4242] font-thin text-5xl">{{$route.query.order}}</h3>
        </div>
        <div>
          <p>Төлем ақы жасалғаннан кейін сіздің электронды поштаңызға кітап / курс 1 күн ішінде жіберіледі.</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "inform-component",
  data() {
    return {
      priceBook: undefined
    }
  },
  methods: {
    async getPriceBook(book, promo = undefined) {
      try {
        const data = await axios.get('/get-price-api.php', {
          params: {
            book,
            promo
          }
        })
        this.priceBook = data.data
      } catch (e) {
        this.$toast.open({
          message: e.message,
          type: "error"
        })
      }
    }
  },
  mounted() {
    this.getPriceBook(this.$route.query.book, this.$route.query.promo)
  }
}
</script>

<style scoped lang="scss">
.inform-component {
  background-image: url("/icon/finance-icon.svg");
  background-repeat: no-repeat;
  background-position: bottom left;
  height: 590px;
  &__content {

  }
  &__block {
    display: grid;
    gap: 26px;
    width: 100%;
    max-width: 560px;
    margin: 0 auto;
    p {
      color: #000000;
      font-size: 18px;
      font-weight: 300;
    }
  }
  @media screen and (max-width: 768px) {
    height: 740px;
    background-position: bottom;
  }
}
</style>
