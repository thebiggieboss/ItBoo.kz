<template>
  <div class="reviews-component pb-16 pt-16">
    <div class="reviews-component__content  wrapper">
      <h2 class="text-black pb-6">Біздерді кім қолдайды</h2>
      <div class="reviews-component__blocks">
        <reviews-card-component
          v-for="(item, index) in reviewData"
          :key="index"
          :card-data="item"
        />
      </div>
    </div>
  </div>
</template>

<script>
import ReviewsCardComponent from "~/components/cards/reviews-card-component.vue";

export default {
  name: "reviews-component",
  components: {ReviewsCardComponent},
  data() {
    return {
      reviewData: [
        {
          title: 'Бағдат Батырбекұлы Мусин',
          subDes: 'Мемлекеттік қайраткер, ҚР министрі.',
          des: "Digital Nomads мүшесі – Мағжан Қайранбай есімді отандасымыз қазақ тілінде «Машинаны үйрету» атты кітабын жарыққа шығарды. Машинаны үйрету/Machine Learning – 20 ғасырда пайда болған ғылым саласы. Оның басты мәні IT саласындағы ілімдерді деректер арқылы компьютерге енгізу және толықтырып отыру. Автордың қазақ тіліндегі оқу құралында машинаны үйретудегі бағдарламалау, инженерлік бағыттағы ақпараттар шоғырланған. Теориялық және практикалық сұрақтар мен жаттығулар берiлген. Бұл оқу құралы машинаны үйрету саласына жаңадан аяқ басқан оқушы, студент немесе осы бағытта жұмыс iстеймiн деген азаматтарға таптырмас дүние. Шыныменде, Ағылшын және орыс тiлдерiнде машинаны үйрету саласы бойынша ақпараттар өте көп болғанымен, қазақ тiлiнде кемде-кем. Мағжанның бұл туындысы – қазақ аудиториясы үшін өте құнды оқулық. Шетелдің алпауыт компаниясында қызмет етіп жүрсе де, еліне қол ұшын созып жатқан Мағжанға өз ризашығымды білдіремін.",
          icon: 'https://tengrinews.kz/userdata/news/2021/news_427333/thumb_m/photo_350158.jpeg'
        },
        {
          title: 'Dr. Арман Жармағамбетов',
          subDes: 'Meta AI (FAIR) postdoc ғалымы',
          des: 'Бұл кітап - қазіргі таңда болып жатқан Жасанды Интеллект саласындағы дағдарыс кезеңінде өте орынды жарық көріп жатқан туынды деп ойлаймын. Бұл саланың (AI) біздің күнделікті өмірімізге, болашағымызға тиетін ықпалы зор екені сөзсіз. Сондақтан елімізге осы кәсіпті игеретін жоғарғы сапалы мамандар ауадай қажет. Кітап заманауи халықаралық стандарттарға сай жазылған және Machine Learning бойынша фундаменталды тақырыптардың бастамаларын қамтиді. Теориялық материалдармен қоса бағдарламау тілдері арқылы шығарылатын практикалық есептер де бар. Жалпы айтқанда, бұл саланы өзіне ашқысы келетін жоғарғы класстағы оқушылардан бастап кез келген жастағы адамға бағытталған тамаша туынды деп ойлаймын.',
          icon: 'https://arman-z.github.io/files/profile.JPG'
        },
      ],
    }
  },
}
</script>

<style scoped lang="scss">
.reviews-component {
  .reviews-component__blocks {
    display: grid;
    grid-template-columns: 1fr 1fr;
    justify-items: center;
    gap: 24px;
  }
  @media screen and (max-width: 960px) {
    .reviews-component__blocks {
      grid-template-columns: 1fr;
    }
  }
}
</style>
