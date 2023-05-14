<template>
  <div class="rating-component pt-16" v-if="!!contentTable.length">
    <div class="rating-component__content wrapper">
      <h2 class="text-center pb-6">Рейтинг</h2>
      <div class="rating-component__blocks">
        <div class="rating-component__tops">
          <div class="rating-component__tops--block" v-for="(item, index) in sortRating.slice(0, 3)" :key="index">
            <p class="rating-component__tops--user">{{item.fname}} {{item.lname}}</p>
            <div class="rating-component__tops--score">
              <h3 class="flex justify-center items-center h-[100%] text-[#000000] font-bold">{{item.score}}</h3>
            </div>
          </div>
        </div>
        <div class="rating-component__table">
          <div class="rating-component__table--headers">
            <div v-for="(item, index) in headerTable" :key="index">
              <p class="text-[#000000]">{{item}}</p>
            </div>
          </div>
          <div class="rating-component__table--block">
            <div v-for="(item, index) in contentTable" :key="index" class="rating-component__table--content">
              <p class="text-[#000000] font-normal">{{index}}</p>
              <p class="text-[#000000] font-normal">{{item.fname}} {{item.lname}}</p>
              <p class="text-[#000000] font-normal">{{item.score}}</p>
            </div>
          </div>
        </div>
        <img src="/icon/rating-icon.svg" alt="" class="rating-component__img">
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "rating-component",
  data() {
    return {
      headerTable: ['#', 'Аты жөні', 'Шығарылған есеп саны'],
      contentTable: []
    }
  },
  computed: {
    sortRating() {
      if(this.contentTable.length) {
        return [this.contentTable[1], this.contentTable[0], this.contentTable[2]];
      }
    }
  },
  methods: {
    async getRating() {
      try {
        const res = await axios.get('/get-rating-api.php')
        this.contentTable = res.data.users
      } catch (e) {
        this.$toast.open({
          message: e.message,
          type: "error"
        })
      }
    }
  },
  mounted() {
    this.getRating()
  },

}
</script>

<style scoped lang="scss">
.rating-component {
  &__blocks {
    display: grid;
    gap: 64px;
  }
  &__tops {
    background-color: rgba(32, 121, 255, 1);
    border-radius: 15px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    justify-content: center;
    align-items: end;
    max-height: 400px;
    min-height: 400px;
    gap: 12px;
    padding: 0 12px;
    &--block {
      display: grid;
      gap: 8px;
    }

    &--user {
      font-style: normal;
      font-weight: 500;
      color: white;
    }
    &--block:first-child {
      justify-self: flex-end;
      .rating-component__tops--score {
        height: 170px;
      }
      .rating-component__tops--user {
        font-size: 18px;
      }
    }
    &--block:nth-child(2) {
      justify-self: center;
      .rating-component__tops--score {
        height: 260px;
      }
      .rating-component__tops--user {
        font-size: 24px;
      }
    }
    &--block:last-child {
      justify-self: flex-start;
      .rating-component__tops--score {
        height: 130px;
      }
      .rating-component__tops--user {
        font-size: 18px;
      }
    }
    &--score {
      width: 100%;
      max-width: 140px;
      margin: 0 auto;
      background: #FFFFFF;
      box-shadow: -20px 0px 4px rgba(0, 0, 0, 0.25);
      border-radius: 5px 5px 0 0;
    }
    @media screen and (max-width: 768px) {
      &--user {
        font-size: 16px !important;
        text-align: center;
      }
      &--score {

      }
    }
  }
  &__img {
    justify-self: center;
    width: 100%;
    max-width: 280px;
  }
  &__table {
    &--headers {
      display: grid;
      grid-template-columns: 80px auto 240px;
      gap: 12px;
      padding: 0 16px 12px 16px;
    }
    &--block {
      background: #d7e8f0;
      border-radius: 15px;
    }
    &--content {
      display: grid;
      grid-template-columns: 80px auto 240px;
      gap: 12px;
      padding: 24px 16px;
    }
    @media screen and (max-width: 600px) {

      &--headers {
        grid-template-columns: 20px 1fr 1fr;
        p {
          text-align: center;
        }
      }
      &--content {
        grid-template-columns: 20px 1fr 1fr;
        p {
          text-align: center;
        }
      }
    }
  }
}
</style>
