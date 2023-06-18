<template>
  <div class="custom-skeleton-component" :style="{width: width}">
    <div
      v-for="(item, index) in quantity" :key="index"
      class="custom-skeleton-component__content skeleton-loader"
      :style="stylesSkeleton">
    </div>
  </div>
</template>

<script>
export default {
  name: "custom-skeleton-component",
  props: {
    height: {
      type: String,
      required: true
    },
    quantity: {
      type: Number,
      required: true
    },
    width: {
      type: String,
      required: true
    },
    padding: {
      type: String,
      default: () => '0'
    },
    margin: {
      type: String,
      default: () => '0'
    },
    borderRadius: {
      type: String,
      default: () => '10'
    }
  },
  computed: {
    stylesSkeleton() {
      return {
        height: this.height,
        width: this.width,
        padding: this.padding.split(" ").map(item => item + 'px').join(' '),
        margin: this.margin.split(" ").map(item => item + 'px').join(' '),
        borderRadius: this.borderRadius.split(" ").map(item => item + 'px').join(' '),
      }
    }
  }
}
</script>

<style scoped lang="scss">
.custom-skeleton-component {
  display: grid;
  gap: 12px;
}
</style>
