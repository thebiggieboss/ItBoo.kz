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

export default {
  name: 'IndexPage',
  components: {
    HowToApplyComponent,
    ReviewsComponent, ResumeComponent, AboutBookComponent, WatchCoursesComponent, MainHeadComponent},
}
</script>
