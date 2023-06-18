<template>
  <div class="about-book-component pb-16 pt-16" id="about-book">
    <div class="about-book-component__content wrapper">
      <img class="about-book-component__img" src="/images/machine-learn.png" alt="">
      <div class="about-book-component__about">
        <h2 class="text-white">Кітап туралы</h2>
        <h3 class="text-white pb-4 font-normal">Машинаны үйрету</h3>
        <p class="text-white pb-12 text-sm font-light"><img class="about-book-component__img-mobile" src="/images/machine-learn.png" alt="">
          Бұл кiтаптың басты мақсаты — машинаны үйрету саласын оқырмандарға таныстыра келіп нөлдiк деңгейден халықаралық дәрежедегi Junior Machine Learning Engineer деңгейiне дейiнгі бiлiм беруді іске асыру. Өз тарапымыздан Junior Machine Learning Engineer деңгейін көздейтін тақырыптарды қарастырып, оларға толықтай түсінік беруге тырыстық. Әр тақырыптағы өз бiлiмдерiңiздi тексеру үшiн тест сұрақтар мен жаттығулар берiп отырдық. Сол сұрақтардың кiтап соңындағы жауабын қарап, өз бiлiмдерiңiздi тексере аласыздар. Сонымен бірге, әр тақырып үшiн Python тiлiнде код жазылып, сол тақырыпты теориялық түрде түсiнiп қана қоймай, сол кодты бiзбен бiрге жазып, практикалық тұрғыдан бiлiмдерiңiздi арттыра алуға қолайлы жағдай жасадық. Кiтаптағы әр бөлiмдi оқып болғаннан кейiн сол тақырыпқа байланысты есептер шығара аласыздар. Автоматтандырылған тексеру жүйесi сiздiң кодыңызды тестiлеу арқылы дұрыс не бұрыс екенiн анықтап бере алады.</p>
        <div class="about-book-component__buttons">
          <button
            class="button__red about-book-component__button"
            data-message="4900 теңге"
            @click="dialogMain = true"
          >
            Кітапты сатып алу
          </button>
          <a href="/doc/short_version.pdf" target="_blank" style="color: #D9D9D9" class="font-light">Кітаптың қысқа нұсқасын оқу</a>
        </div>
      </div>
    </div>
    <dialog-main v-if="dialogMain" @close="dialogMain = false">
      <contact-us-dialog-component />
    </dialog-main>
  </div>
</template>

<script>
import DialogMain from "~/components/dialogs/index.vue";
import ContactUsDialogComponent from "~/components/dialogs/contact-us-dialog-component.vue";

export default {
  name: "about-book-component",
  components: {ContactUsDialogComponent, DialogMain},
  data() {
    return {
      dialogMain: false
    }
  }
}
</script>

<style scoped lang="scss">
.about-book-component {
  background-color: $primary;
  .about-book-component__content {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 24px;
  }
  .about-book-component__about {
    display: grid;
    gap: 6px;
  }
  &__buttons {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    align-items: center;

  }
  &__button {
    position: relative;
    z-index: 11;
    height: 60px;
    &:after {
      content: attr(data-message);
      position: absolute;
      bottom: 100%;
      right: 16px;
      color: white;
      padding: 4px 8px 0 8px;
      font-weight: 300;
      font-size: 16px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      width: 120px;
      background-color: #2E2E2E;

    }
  }
  &__img {
    justify-self: start;
  }
  &__img-mobile {
    display: none;
  }
  @media screen and (max-width: 960px) {
    &__buttons {
      grid-template-columns: 1fr;
    }
  }
  @media screen and (max-width: 960px) {
    .about-book-component__content {
      grid-template-columns: 1fr;
    }
    &__buttons {
      max-width: 260px;
      margin: 0 auto;
    }
    &__img {
      display: none;
    }
    &__img-mobile {
      display: block;
      float: left;
      max-width: 200px;
      margin: 0 16px 8px 0;
    }
  }
}
</style>
