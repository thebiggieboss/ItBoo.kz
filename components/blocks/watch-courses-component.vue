<template>
 <div class="watch-courses-component pb-16 pt-16" id="watch-courses">
   <div class="watch-courses-component__content wrapper">
     <h2 class="text-black pb-4">Біздің курстарымызды шолыңыз</h2>
     <p class="pb-4 max-w-[540px]">Lorem ipsum dolor sit amet consectetur. Neque dignissim ullamcorper massa augue.</p>
     <div class="watch-courses-component__blocks">
       <div class="watch-courses-component__block">
         <div v-for="(item, index) in listCourses" :key="index" class="watch-courses-component__block--sub">
           <img :src="item.icon" alt="">
           <p>{{item.title}}</p>
         </div>
       </div>
       <courses-card-component v-for="(item, index) in courses" :key="index" :card-data="item"/>
     </div>
   </div>
 </div>
</template>

<script>
import CoursesCardComponent from "~/components/cards/courses-card-component.vue";

export default {
  name: "watch-courses-component",
  components: {CoursesCardComponent},
  data() {
    return {
      courses: [
        {
          icon: '/images/codewars.png',
          title: 'Python',
          des: 'Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum.',
          subDes: {
            title: 'Тілдер',
            icon: '/icons/lang-course.svg',
            time: '6h 33 min'
          }
        },
        {
          icon: '/images/database.png',
          title: 'SQL',
          des: 'Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum.',
          subDes: {
            title: 'Деректер',
            icon: '/icons/dev-course.svg',
            time: '3h 19 min'
          }
        },
      ],
      listCourses: [
        {
          icon: '/icons/all-course.svg',
          title: 'Барлық санаттар'
        },
        {
          icon: '/icons/lang-course.svg',
          title: 'Тілдер'
        },
        {
          icon: '/icons/dev-course.svg',
          title: 'Деректер'
        },
      ]
    }
  }
}
</script>

<style scoped lang="scss">
.watch-courses-component {
  background-image: url("/icons/finance-icon.svg");
  background-repeat: no-repeat;
  background-position: bottom left;
  .watch-courses-component__content {

  }
  .watch-courses-component__blocks {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 24px;
  }
  .watch-courses-component__block {
    display: flex;
    flex-direction: column;
    gap: 24px;
    &--sub {
      display: grid;
      grid-template-columns: auto 1fr;
      align-items: center;
      gap: 24px;
    }
  }
  @media screen and (max-width: 960px) {
    background-image: none;
    .watch-courses-component__content {
      background-image: url("/icons/finance-icon-reverse.svg");
      background-repeat: no-repeat;
      background-position: right 90px;
    }
    .watch-courses-component__blocks {
      grid-template-columns: 1fr 1fr;
    }
    .watch-courses-component__block {
      flex-direction: row;
      grid-column: span 2;
      &--sub {
        display: flex;
        flex-direction: column-reverse;
        gap: 12px;
      }
      &--sub:first-child {
        display: none;
      }
    }
  }
  @media screen and (max-width: 768px) {
    .watch-courses-component__blocks {
      grid-template-columns: 1fr;
      justify-items: center;
    }
    .watch-courses-component__block {
      justify-self: start;
      grid-column: auto;
    }
  }
  @media screen and (max-width: 500px) {
    .watch-courses-component__content {
      background-position: right 100px;
    }
  }
}
</style>
