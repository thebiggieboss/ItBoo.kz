<template>
  <div class="courses-card-component">
    <img :src="cardData.icon" alt="" @click="dialogMain = true">
    <div class="courses-card-component__content">
      <img :src="cardData.subDes.icon" alt="">
      <p class="text-black">{{cardData.subDes.title}}</p>
      <p class="text-black">{{cardData.subDes.time}}</p>
    </div>
    <div class="max-w-[340px]">
      <h3 class="text-black font-semibold	pb-2">{{cardData.title}}</h3>
      <p class="text-black font-normal">{{cardData.des}}</p>
    </div>
    <full-size-dialog v-if="dialogMain" @close="dialogMain = false">
      <course-description-dialog :dialog-data="cardData"/>
    </full-size-dialog>
  </div>
</template>

<script>
import FullSizeDialog from "~/components/dialogs/full-size-dialog.vue";
import CourseDescriptionDialog from "~/components/dialogs/course-description-dialog.vue";

export default {
  name: "courses-card-component",
  components: {CourseDescriptionDialog, FullSizeDialog},
  props: {
    cardData: {
      type: Object,
      default: () => ({})
    }
  },
  data() {
    return {
      dialogMain: false
    }
  },
}
</script>

<style scoped lang="scss">
.courses-card-component {
  display: grid;
  gap: 12px;
  max-width: max-content;
  .courses-card-component__content {
    display: grid;
    grid-template-columns: auto auto 1fr;
    gap: 6px;
    align-items: center;
    justify-items: self-end;
    img {
      height: 32px;
      width: 32px;
    }
  }
}
</style>
