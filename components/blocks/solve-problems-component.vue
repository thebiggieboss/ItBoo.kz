<template>
  <div class="solve-problems-component pt-16">
    <div class="solve-problems-component__content wrapper">
      <h2 class="text-center pb-8">Есептер тізімі</h2>
      <div class="solve-problems-component__blocks">
        <template v-if="!preloader">
          <div class="solve-problems-component__block">
            <custom-skeleton-component
              height="52px"
              :quantity="4"
              width="100%"
            />
            <custom-skeleton-component
              height="52px"
              :quantity="4"
              width="100%"
            />
          </div>
        </template>
        <template v-else>
          <div class="solve-problems-component__block" v-for="(item, index) in dataProblems" :key="index">
            <div class="solve-problems-component__problem">
              <p class="text-xl">{{item.name}} (<span class="text-[#8D8D8D]">{{item.tags}}</span>)</p>
              <nuxt-link :to="`/esepter-tizimi/${item.id}`" class="solve-problems-component__mob-button text-xl">
                Есепті шығару
              </nuxt-link>
            </div>
            <nuxt-link :to="`/esepter-tizimi/${item.id}`" class="solve-problems-component__button text-xl">
              Есепті шығару
            </nuxt-link>
          </div>
        </template>
      </div>
      <img src="/icon/solve-problems-icon.svg" alt="" class="solve-problems-component__img">
    </div>
  </div>
</template>

<script>
import axios from "axios";
import CustomSkeletonComponent from "~/components/elements/custom-skeleton-component.vue";

export default {
  name: "solve-problems-component",
  components: {CustomSkeletonComponent},
  data() {
    return {
      dataProblems: [],
      preloader: false
    }
  },
  methods: {
    async getProblems() {
      this.preloader = true
      try {
        const res = axios.get('/get-problems.php')
        this.dataProblems = res.data
      } catch (e) {
        this.$toast.open({
          message: e.message,
          type: "error"
        })
      } finally {
        this.preloader = false
      }
    }
  },
  async mounted() {
    await this.getProblems()
  }
}
</script>

<style scoped lang="scss">
.solve-problems-component {
  &__content {

  }
  &__blocks {
    display: grid;
    gap: 24px;
  }
  &__block {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 12px;
  }
  &__img {
    width: 490px;
    height: 440px;
    margin: 0 auto;
  }
  &__problem {
    background-color: rgba(215, 232, 240, 1);
    border-radius: 15px;
    padding: 12px;
    line-height: 1.3;
    overflow: hidden;
    p {
      font-size: 16px;
      color: #000000;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
      padding: 0 12px;
    }
  }
  &__button {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 12px 20px;
    border-radius: $border-radius-primary;
    transition-duration: 0.3s;
    outline: none;
    font-weight: 600;
    font-size: 16px;
    line-height: 1.3;
    color: #FFFFFF;
    background-color: $primary;
  }
  &__mob-button {
    display: none;
    width: 100%;
    padding: 12px 20px;
    border-radius: $border-radius-primary;
    transition-duration: 0.3s;
    outline: none;
    font-weight: 600;
    font-size: 16px;
    line-height: 1.3;
    color: #FFFFFF;
    background-color: $primary;
  }
  @media screen and (max-width: 768px) {
    &__block {
      grid-template-columns: 1fr;
    }
    &__mob-button {
      margin-top: 16px;
      display: block;
    }
    &__problem {
      padding: 12px 0 0 0;
      text-align: center;
    }
    &__button {
      display: none;
    }
  }
}
</style>
