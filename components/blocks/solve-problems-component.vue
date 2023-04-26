<template>
  <div class="solve-problems-component pt-16">
    <div class="solve-problems-component__content wrapper">
      <h2 class="text-center pb-8">Есептер тізімі</h2>
      <div class="solve-problems-component__blocks">
        <div class="solve-problems-component__block" v-for="(item, index) in problems" :key="index">
          <div class="solve-problems-component__problem">
            <p class="text-xl">{{item.title}}</p>
            <nuxt-link :to="`/esepter-tizimi/${item.id}`" class="solve-problems-component__mob-button text-xl">
              Есепті шығару
            </nuxt-link>
          </div>
          <nuxt-link :to="`/esepter-tizimi/${item.id}`" class="solve-problems-component__button text-xl">
            Есепті шығару
          </nuxt-link>
        </div>
      </div>
      <img src="/icons/solve-problems-icon.svg" alt="" class="solve-problems-component__img">
    </div>
  </div>
</template>

<script>
export default {
  name: "solve-problems-component",
  data() {
    return {
      problems: [
        {
          id: 1,
          title: "Гипотенуза",
          content: {
            title: "Гипотенуза",
            desc: "Сізге in_1.csv файлының әр жолында тік бұрышты үшбұрыштың а және b екі катеті берілген. Осы берілген катеттер бойынша тік бұрышты үшбұрыштың гипотенузасын табыңыз. а және b сандары 1 мен 100-дің арасындағы сандар. out_1.csv файлының әр жолына гипотенуза ұзындығын жазып шығарыңыз. Гипотенуза ұзындығы ондық нүктеден кейін екі санмен шығарылуы керек.",
            file: ""
          }
        }
      ]
    }
  }
}
</script>

<style scoped lang="scss">
.solve-problems-component {
  &__content {

  }
  &__blocks {
    display: grid;
    gap: 24px;
  }
  &__block {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 12px;
  }
  &__img {
    width: 490px;
    height: 440px;
    margin: 0 auto;
  }
  &__problem {
    background-color: rgba(215, 232, 240, 1);
    border-radius: 15px;
    padding: 12px 0 12px 120px;
    line-height: 1.3;
    p {
      font-size: 16px;
      color: #000000;
    }
  }
  &__button {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 12px 20px;
    border-radius: $border-radius-primary;
    transition-duration: 0.3s;
    outline: none;
    font-weight: 600;
    font-size: 16px;
    line-height: 1.3;
    color: #FFFFFF;
    background-color: $primary;
  }
  &__mob-button {
    display: none;
    width: 100%;
    padding: 12px 20px;
    border-radius: $border-radius-primary;
    transition-duration: 0.3s;
    outline: none;
    font-weight: 600;
    font-size: 16px;
    line-height: 1.3;
    color: #FFFFFF;
    background-color: $primary;
  }
  @media screen and (max-width: 768px) {
    &__block {
      grid-template-columns: 1fr;
    }
    &__mob-button {
      margin-top: 16px;
      display: block;
    }
    &__problem {
      padding: 12px 0 0 0;
      text-align: center;
    }
    &__button {
      display: none;
    }
  }
}
</style>
