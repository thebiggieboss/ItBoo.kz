<template>
  <div class="problem-component pb-16 pt-16">
    <div class="problem-component__content wrapper">
      <h2 class="text-center pb-8">{{content.title}}</h2>
      <div class="problem-component__block">
        <p class="problem-component__problem pb-4">Есеп берілгені</p>
        <p style="color: #000000" class="font-normal">{{content.desc}}</p>
        <div class="problem-component__">

        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "problem-component",
  data() {
    return {
      content: {
        title: "Гипотенуза",
        desc: "Сізге in_1.csv файлының әр жолында тік бұрышты үшбұрыштың а және b екі катеті берілген. Осы берілген катеттер бойынша тік бұрышты үшбұрыштың гипотенузасын табыңыз. а және b сандары 1 мен 100-дің арасындағы сандар. out_1.csv файлының әр жолына гипотенуза ұзындығын жазып шығарыңыз. Гипотенуза ұзындығы ондық нүктеден кейін екі санмен шығарылуы керек.",
        file: ""
      }
    }
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
