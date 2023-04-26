<template>
  <div class="course-description-dialog">
    <div class="course-description-dialog__content">
      <div class="course-description-dialog__head-content">
        <div class="course-description-dialog__head">
          <img :src="dialogData.icon" alt="" class="course-description-dialog__head--image">
          <div class="course-description-dialog__head--content">
            <img :src="dialogData.subDes.icon" alt="">
            <p class="text-black">{{dialogData.subDes.title}}</p>
            <p class="text-black">{{dialogData.subDes.time}}</p>
          </div>
        </div>
        <div class="course-description-dialog__description">
          <p class="text-[#000000] font-normal pb-6">{{dialogData.description}}</p>
          <p class="course-description-dialog__description--li-style pb-2">{{dialogData.content.title}}</p>
          <ul class="course-description-dialog__description--ul-style">
            <li v-for="el in dialogData.content.list" :key="el">{{el}}</li>
          </ul>
        </div>
      </div>
      <div class="course-description-dialog__steps">
        <h3 class="text-black font-semibold	pb-2">{{dialogData.title}}</h3>
        <div class="course-description-dialog__steps--block">
          <div class="course-description-dialog__steps--list" v-for="(item, index) in dialogData.steps" :key="index">
            <p>{{item.title}}</p>
            <p>{{item.value}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "course-description-dialog",
  props: {
    dialogData: {
      type: Object,
      required: true,
      default: () => ({})
    }
  }
}
</script>

<style scoped lang="scss">
.course-description-dialog {
  width: 100%;
  max-width: 1200px;
  padding: 64px 24px;
  margin: 0 auto;
  &__content {
    display: grid;
    gap: 8px;
  }
  &__head-content {
    display: grid;
    grid-template-columns: 480px auto;
    gap: 24px;
  }
  &__head {
    &--image {
      width: 100%;
      height: 250px;
      padding-bottom: 8px;
    }
    &--content {
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
  &__description {
    &--li-style {
      color: #000000;
    }
    &--ul-style {
      padding: 0 0 0 12px;
      list-style-type: disc;
      list-style-position: inside;
    }
  }
  &__steps {
    &--block {
      display: grid;
      gap: 4px;
    }
    &--list {
      display: flex;
      justify-content: space-between;
      gap: 12px;
      p {
        color: #000000;
        font-style: normal;
        font-weight: 500;
      }
    }
  }
  @media screen and (max-width: 1144px) {
    &__head-content {
      grid-template-columns: auto auto;
    }
  }
  @media screen and (max-width: 960px) {
    &__head-content {
      grid-template-columns: 1fr;
    }
    &__head, &__steps {
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
    }
    &__description {
      display: none;
    }
    &__steps {
      &--list {
        p {
          font-size: 12px;
        }
      }
    }
  }
}
</style>
