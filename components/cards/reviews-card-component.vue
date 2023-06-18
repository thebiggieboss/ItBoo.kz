<template>
  <div class="reviews-card-component wrapper">
    <img :src="cardData.icon" alt="" class="reviews-card-component__img">
    <div class="reviews-card-component__head-text">
      <h3 class="text-[#000000] text-center">{{cardData.title}}</h3>
      <p class="text-center">{{cardData.subDes}}</p>
    </div>
    <p class="reviews-card-component__des">'{{cardData.des}}'</p>
  </div>
</template>

<script>
export default {
  name: 'reviews-card-component',
  props: {
    cardData: {
      type: Object,
      default: () => ({}),
    },
  },
}
</script>

<style scoped lang="scss">
.reviews-card-component {
  display: grid;
  height: 100%;
  justify-items: center;
  grid-template-rows: auto auto 1fr;
  gap: 12px;
  .reviews-card-component__img {
    width: 100%;
    max-width: 202px;
    height: 202px;
    object-fit: cover;
    border-radius: 50%;
  }
  .reviews-card-component__head-text {
    border-bottom: 1px solid black;
    padding: 0 4px 12px 4px;
  }
  .reviews-card-component__des {
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
    font-weight: 400;
    color: #000000;
    text-align: center;
  }
  @media screen and (max-width: 960px) {
    .reviews-card-component__img {
      max-width: 160px;
      height: 160px;
    }
    .reviews-card-component__des {
      max-width: 100%;
      font-size: 12px;
    }
  }
}
</style>
