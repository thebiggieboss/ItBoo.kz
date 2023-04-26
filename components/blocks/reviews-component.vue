<template>
  <div class="reviews-component pb-16 pt-16">
    <div class="reviews-component__head-text wrapper">
      <h2 class="text-black pb-2">Пікірлер</h2>
      <h3 class="pb-12">Біз туралы адамдар не ойлайды</h3>
    </div>
    <div class="reviews-component__content">
      <client-only>
        <reviews-card-component :card-data="reviewData"/>
      </client-only>
    </div>
    <img src="/icons/review-icon.svg" alt="">
  </div>
</template>

<script>
import ReviewsCardComponent from "~/components/cards/reviews-card-component.vue";

export default {
  name: "reviews-component",
  components: {ReviewsCardComponent},
  data() {
    return {
      reviewData: [
        {
          title: 'Қайрат Мақсатұлы',
          subDes: 'Студент',
          des: 'Lorem ipsum dolor sit amet consectetur. Id faucibus quis bibendum egestas donec justo commodo est facilisis. Amet feugiat volutpat ut eget morbi tempus at. Egestas a odio phasellus pretium et facilisi consectetur molestie id. Dolor blandit senectus ornare congue morbi.',
          icon: '/images/review-1.png'
        },
        {
          title: 'Ақнур Жанарова',
          subDes: 'Студент',
          des: 'Lorem ipsum dolor sit amet consectetur. Id faucibus quis bibendum egestas donec justo commodo est facilisis. Amet feugiat volutpat ut eget morbi tempus at. Egestas a odio phasellus pretium et facilisi consectetur molestie id. Dolor blandit senectus ornare congue morbi.',
          icon: '/images/review-2.png'
        },
        {
          title: 'Арлан Тұмаров',
          subDes: 'Студент',
          des: 'Lorem ipsum dolor sit amet consectetur. Id faucibus quis bibendum egestas donec justo commodo est facilisis. Amet feugiat volutpat ut eget morbi tempus at. Egestas a odio phasellus pretium et facilisi consectetur molestie id. Dolor blandit senectus ornare congue morbi.',
          icon: '/images/review-3.png'
        },
        {
          title: 'Арлан Тұмаров',
          subDes: 'Студент',
          des: 'Lorem ipsum dolor sit amet consectetur. Id faucibus quis bibendum egestas donec justo commodo est facilisis. Amet feugiat volutpat ut eget morbi tempus at. Egestas a odio phasellus pretium et facilisi consectetur molestie id. Dolor blandit senectus ornare congue morbi.',
          icon: '/images/review-3.png'
        },
        {
          title: 'Арлан Тұмаров',
          subDes: 'Студент',
          des: 'Lorem ipsum dolor sit amet consectetur. Id faucibus quis bibendum egestas donec justo commodo est facilisis. Amet feugiat volutpat ut eget morbi tempus at. Egestas a odio phasellus pretium et facilisi consectetur molestie id. Dolor blandit senectus ornare congue morbi.',
          icon: '/images/review-3.png'
        },
      ],
    }
  },
}
</script>

<style scoped lang="scss">
.reviews-component {
  position: relative;
  height: 720px;
  img {
    position: absolute;
    right: 0;
    bottom: 0;
  }
  .reviews-component__content {
    background-color: #E8ECFF;
  }
  @media screen and (max-width: 768px) {
    img {
      width: 160px;
    }
  }
}
</style>
