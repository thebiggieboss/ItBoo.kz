<template>
  <div class="reviews-component pb-16 pt-16">
    <div class="reviews-component__head-text wrapper">
      <h2 class="text-black pb-2">Пікірлер</h2>
      <h3 class="pb-12">Біз туралы адамдар не ойлайды</h3>
    </div>
    <div class="reviews-component__content">
      <client-only>
        <reviews-card-component :card-data="reviewData"/>
      </client-only>
    </div>
    <img src="/icon/review-icon.svg" alt="">
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
          subDes: 'Мемлекеттік қайраткер, ҚР министрі. fwafwfasfsafsafa',
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
  position: relative;
  height: 720px;
  img {
    position: absolute;
    right: 0;
    bottom: 0;
  }
  .reviews-component__content {
    background-color: #E8ECFF;
  }
  @media screen and (max-width: 768px) {
    img {
      width: 160px;
    }
  }
}
</style>
