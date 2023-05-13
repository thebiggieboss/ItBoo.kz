<template>
  <div>
    <main-head-component />
    <watch-courses-component />
    <about-book-component />
    <resume-component />
    <reviews-component />
    <how-to-apply-component />
  </div>
</template>

<script>

import MainHeadComponent from "~/components/blocks/main-head-component.vue";
import WatchCoursesComponent from "~/components/blocks/watch-courses-component.vue";
import AboutBookComponent from "~/components/blocks/about-book-component.vue";
import ResumeComponent from "~/components/blocks/resume-component.vue";
import ReviewsComponent from "~/components/blocks/reviews-component.vue";
import HowToApplyComponent from "~/components/blocks/how-to-apply-component.vue";
import axios from "axios";

export default {
  name: 'IndexPage',
  components: {
    HowToApplyComponent,
    ReviewsComponent, ResumeComponent, AboutBookComponent, WatchCoursesComponent, MainHeadComponent},
  head() {
    return {
      title: 'ItBoo.kz',
      meta: [
        {
          hid: 'og-title',
          property: 'og:title',
          content: 'ItBoo.kz'
        },
        {
          hid: 'og:desc',
          property: 'og:description',
          content: 'Кешенді онлайн IT курстары| itBoo\n' +
            'IT дағдыларыңыз бен біліміңізді кеңейткіңіз келе ме? Біздің онлайн IT курстарымыз Python-нан Machine Learning-ке дейін технологияның әртүрлі салаларында кешенді оқытуды ұсынады. Ауқымды курс түрлерінен ең ыңғайлы жолмен оқуды көздеп, таңдау жасаңыз. Қазір тіркеліп, мансабыңызға жетуге бір қадам жақындаңыз!',
        },
        { hid: 'og-image', property: 'og:image', content: '/images/Thumbnail.png' },
      ],
    }
  },
}
</script>
