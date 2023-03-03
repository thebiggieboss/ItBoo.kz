<template>
  <div class="pb-16 pt-16">
    <div class="mb-16">
      <div class="error">{{ error.statusCode }}</div>
      <div class="errorText">{{ errorCodes[error.statusCode] }}</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "error",
  props: ['error'],
  layout: 'error',
  data() {
    return {
      errorCodes: {
        404: 'СТРАНИЦА НЕ НАЙДЕНА',
        500: 'error'
    },
    }
  },
  mounted() {
    window.scrollTo(0, 0);
  }
}
</script>

<style scoped>
.error {
  margin: auto;
  text-align: center;
  /*  background: linear-gradient(0deg, #FF6700 26%, #FAFF00 72%);*/
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: 800;
  font-size: 150px;
}
.errorText {
  font-weight: 600;
  text-align: center;
  padding-bottom: 50px;
  font-size: 36px;
}
</style>
