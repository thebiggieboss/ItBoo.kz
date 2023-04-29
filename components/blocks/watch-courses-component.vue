<template>
 <div class="watch-courses-component pb-16 pt-16" id="watch-courses">
   <div class="watch-courses-component__content wrapper">
     <h2 class="text-black pb-4">Біздің курстарымызды шолыңыз</h2>
     <p class="pb-4 max-w-[540px]">Lorem ipsum dolor sit amet consectetur. Neque dignissim ullamcorper massa augue.</p>
     <div class="watch-courses-component__blocks">
       <div class="watch-courses-component__block">
         <div v-for="(item, index) in listCourses" :key="index" class="watch-courses-component__block--sub">
           <img :src="item.icon" alt="">
           <p>{{item.title}}</p>
         </div>
       </div>
       <courses-card-component v-for="(item, index) in courses" :key="index" :card-data="item"/>
     </div>
   </div>
 </div>
</template>

<script>
import CoursesCardComponent from "~/components/cards/courses-card-component.vue";

export default {
  name: "watch-courses-component",
  components: {CoursesCardComponent},
  data() {
    return {
      courses: [
        {
          icon: '/images/codewars.png',
          title: 'Python',
          des: 'Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum.',
          subDes: {
            title: 'Тілдер',
            icon: '/icon/lang-course.svg',
            time: '6h 33 min'
          },
          description: "Python – веб-сайттар мен бағдарламалық қамтамасыз етуді құру, тапсырмаларды автоматтандыру және деректерді талдау үшін жиі қолданылатын компьютерлік бағдарламалау тілі. Python - бұл жалпы мақсаттағы тіл, яғни оны әртүрлі бағдарламаларды жасау үшін пайдалануға болады және қандай да бір нақты мәселелерге арналмаған.",
          content: {
            title: "Питонмен не істей аласыз? Кейбір нәрселер мыналарды қамтиды:",
            list: ["Деректерді талдау және машиналық оқыту", "Веб әзірлеу ", "Автоматтандыру немесе сценарий жазу", "Бағдарламалық қамтамасыз етуді тестілеу және прототиптеу", "Күнделікті тапсырмалар"]
          },
          steps: [
            {
              title: "1-part Lorem ipsum dolor sit amet consectetur",
              value: "1h 24 min"
            },
            {
              title: "2-part Lorem ipsum dolor sit amet consectetur",
              value: "1h 15 min"
            },
            {
              title: "3-part Lorem ipsum dolor sit amet consectetur",
              value: "1h 33 min"
            },
            {
              title: "4-part Lorem ipsum dolor sit amet consectetur",
              value: "45 min"
            },
            {
              title: "5-part Lorem ipsum dolor sit amet consectetur",
              value: "22 min"
            },
          ]
        },
        {
          icon: '/images/database.png',
          title: 'SQL',
          des: 'Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum.',
          subDes: {
            title: 'Деректер',
            icon: '/icon/dev-course.svg',
            time: '3h 19 min'
          },
          description: "SQL – мәліметтер қорынан ақпаратты алуға арналған құрылымдық сұрау тілі. Егер SQL операциясының схемасын қарапайым сөздермен сипаттайтын болсақ, онда маман сұранысты қалыптастырады және оны мәліметтер базасына жібереді. Бұл, өз кезегінде, бұл ақпаратты өңдейді, маманға нақты не қажет екенін «түсінеді» және жауап жібереді.",
          content: {
            title: "SQL-ті әртүрлі типтегі мамандар пайдаланады:",
            list: ["Сарапшылар мен өнім маркетологтары. Мәліметтерді өз бетінше қабылдауға және өңдеуге көмектеседі.", "Әзірлеушілер мен тестерлер. Мәліметтер базасын дербес құрастыра алады, веб-сайттар мен қолданбаларды жақсарта алады.", "Басшылар мен менеджерлер. Мәліметтер базасына өз бетінше қол жеткізуге, бақылауға және істің жай-күйі туралы деректерді алуға мүмкіндік береді."]
          },
          steps: [
            {
              title: "1-part Lorem ipsum dolor sit amet consectetur",
              value: "1h 24 min"
            },
            {
              title: "2-part Lorem ipsum dolor sit amet consectetur",
              value: "1h 15 min"
            },
            {
              title: "3-part Lorem ipsum dolor sit amet consectetur",
              value: "40 min"
            },
          ]
        },
      ],
      listCourses: [
        {
          icon: '/icon/all-course.svg',
          title: 'Барлық санаттар'
        },
        {
          icon: '/icon/lang-course.svg',
          title: 'Тілдер'
        },
        {
          icon: '/icon/dev-course.svg',
          title: 'Деректер'
        },
      ]
    }
  }
}
</script>

<style scoped lang="scss">
.watch-courses-component {
  background-image: url("/static/icon/finance-icon.svg");
  background-repeat: no-repeat;
  background-position: bottom left;
  .watch-courses-component__content {

  }
  .watch-courses-component__blocks {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 24px;
  }
  .watch-courses-component__block {
    display: flex;
    flex-direction: column;
    gap: 24px;
    &--sub {
      display: grid;
      grid-template-columns: auto 1fr;
      align-items: center;
      gap: 24px;
    }
  }
  @media screen and (max-width: 960px) {
    background-image: none;
    .watch-courses-component__content {
      background-image: url("/static/icon/finance-icon-reverse.svg");
      background-repeat: no-repeat;
      background-position: right 90px;
    }
    .watch-courses-component__blocks {
      grid-template-columns: 1fr 1fr;
    }
    .watch-courses-component__block {
      flex-direction: row;
      grid-column: span 2;
      &--sub {
        display: flex;
        flex-direction: column-reverse;
        gap: 12px;
      }
      &--sub:first-child {
        display: none;
      }
    }
  }
  @media screen and (max-width: 768px) {
    .watch-courses-component__blocks {
      grid-template-columns: 1fr;
      justify-items: center;
    }
    .watch-courses-component__block {
      justify-self: start;
      grid-column: auto;
    }
  }
  @media screen and (max-width: 500px) {
    .watch-courses-component__content {
      background-position: right 100px;
    }
  }
}
</style>
