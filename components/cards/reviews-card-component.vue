<template>
  <div class="reviews-card-component wrapper">
    <carousel
      paginationActiveColor="#2079FF"
      paginationColor="#C4CDFF"
      :paginationSize="15"
      :perPageCustom="[[200, 1],[768, 2], [1144, 3], [1400, 4]]"
      autoplay
    >
      <slide v-for="(item, index) in cardData" :key="index">
        <div class="reviews-card-component__content">
          <div class="reviews-card-component__head-text">
            <img :src="item.icon" alt="" />
            <div>
              <h3 class="text-black">{{ item.title }}</h3>
              <p>{{ item.subDes }}</p>
            </div>
          </div>
          <p class="reviews-card-component__des">{{ item.des }}</p>
        </div>
      </slide>
    </carousel>
  </div>
</template>

<script>
export default {
  name: 'reviews-card-component',
  props: {
    cardData: {
      type: Array,
      default: () => [],
    },
  },
}
</script>

<style scoped lang="scss">
.reviews-card-component {
  padding: 32px 0 0 0 ;
  .reviews-card-component__content {
    display: grid;
    grid-template-rows: 1fr auto;
    gap: 16px;

    justify-content: center;
  }
  .reviews-card-component__head-text {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 12px;
    align-items: center;
    p {
      color: #8d8d8d;
    }
  }
  &__des {
    color: #8d8d8d;
    max-width: 320px;
  }
  @media screen and (max-width: 1500px) {
    padding: 32px 8px 0 8px ;
  }
  @media screen and (max-width: 768px) {
    .VueCarousel {
      width: 100%;
      max-width: 300px;
      margin: 0 auto;
    }
  }
}
</style>
