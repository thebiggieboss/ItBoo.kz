<template>
  <div class="problem-component pb-16 pt-16">
    <div class="problem-component__content wrapper">
      <h2 class="text-center pb-8">{{dataProblems.title}}</h2>
      <div class="problem-component__block">
        <p class="problem-component__problem pb-4">Есеп берілгені</p>
        <p style="color: #000000" class="font-normal" v-html="dataProblems.description"></p>
        <div class="problem-component__">

        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "problem-component",
  data() {
    return {
      dataProblems: []
    }
  },
  async mounted() {
    await axios.get('/get-problems.php').then(res => {
      this.dataProblems = res.data.find(item => item.id === this.$route.params.id)
    }).catch(e => {
      console.log('error', e)
    })
  }
}
</script>

<style scoped lang="scss">
.problem-component {
  &__content {

  }
  &__problem {
    font-weight: 700;
    font-size: 20px;
    color: #000000;

  }
}
</style>
