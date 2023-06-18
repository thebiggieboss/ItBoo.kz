<template>
 <div class="watch-courses-component pb-16 pt-16" id="watch-courses">
   <div class="watch-courses-component__content wrapper">
     <h2 class="text-black pb-2">Біздің курстарымыз</h2>
     <h3 class="watch-courses-component__content--title pb-8 font-normal">Курстарымызды таңдап, біліміңізді арттырыңыз</h3>
     <div class="watch-courses-component__blocks">
       <ul class="watch-courses-component__block">
         <li
           v-for="(item, index) in listCourses"
           :key="index"
         >
           <label class="watch-courses-component__label">
             <input
               name="course-count"
               :value="index"
               class="watch-courses-component__radio"
               type="radio"
               v-model="courseTabs"
             />
             <img class="watch-courses-component__course-img" :src="item.icon" alt="">
             <p class="watch-courses-component__course-title text-2xl font-normal text-[#B0B0B0]">{{item.title}}</p>
           </label>
         </li>
       </ul>
       <div class="watch-courses-component__courses">
         <courses-card-component v-for="(item, index) in coursesContent" :key="index" :card-data="item"/>
       </div>
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
      courseTabs: 0,
      listCourses: [
        {
          id: 1,
          icon: '/icon/all-course.svg',
          title: 'Барлық санаттар',
          cards: undefined
        },
        {
          id: 2,
          icon: '/icon/course-3.svg',
          title: 'Python',
          cards: [
            {
              icon: '/images/codewars.png',
              title: 'Python',
              des: 'Python — жоғары дәрежедегі бағдарламаллау тілі. Аз синтаксисті талап етеді. Бәрімізге белгілі Instagram әлеуметтік желісі осы python тілінде жазылған.',
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
          ]
        },
        {
          id: 3,
          icon: '/icon/course-2.svg',
          title: 'SQL',
          cards: [
            {
              icon: '/images/database.png',
              title: 'SQL',
              des: 'Реляциялық дерекқорларын(database) құруға, өзгертуге және басқаруға арналған әмбебап компьютер тілі. Оңай әрі түсінікті компьютерлік командалар ыңғайлы жұмысты қамтамасыз етеді.',
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
          ]
        },
        {
          id: 3,
          icon: '/icon/course-1.svg',
          title: 'C++',
          cards: [
            {
              icon: '/images/course-c.png',
              title: 'C++',
              des: 'Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum.',
              subDes: {
                title: 'Деректер',
                icon: '/icon/dev-course.svg',
                time: '3h 19 min'
              },
              description: "Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum.",
              content: {
                title: "Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum.",
                list: ["Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum."]
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
          ]
        },
        {
          id: 4,
          icon: '/icon/course-4.svg',
          title: 'Javascript',
          cards: [
            {
              icon: '/images/course-js.png',
              title: 'Javascript',
              des: 'Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum.',
              subDes: {
                title: 'Тілдер',
                icon: '/icon/lang-course.svg',
                time: '3h 19 min'
              },
              description: "Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum.",
              content: {
                title: "Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum.",
                list: ["Lorem ipsum dolor sit amet consectetur. Vulputate quis adipiscing diam dignissim interdum."]
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
          ]
        },
        {
          id: 5,
          icon: '/icon/course-5.svg',
          title: 'Машинаны үйрету',
          cards: []
        },
      ]
    }
  },
  computed: {
    coursesContent() {
      const content = this.listCourses[this.courseTabs]
      if(content.id === 1) {
        return this.listCourses.flatMap(item => item.cards).filter(Boolean)
      } else {
        return content.cards
      }
    }
  }
}
</script>

<style scoped lang="scss">
.watch-courses-component {
  background-image: url("/icon/finance-icon.svg");
  background-repeat: no-repeat;
  background-position: bottom left;
  .watch-courses-component__content {
    min-height: 800px;
  }
  .watch-courses-component__blocks {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 24px;
    transition: all 0.9s ease;
  }
  .watch-courses-component__courses {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
    transition: all 0.9s ease;
  }
  .watch-courses-component__block {
    display: flex;
    flex-direction: column;
    gap: 36px;
    &--sub {
      display: grid;
      grid-template-columns: auto 1fr;
      align-items: center;
      gap: 24px;
    }
  }
  .watch-courses-component__label {
    position: relative;
    display: grid;
    grid-template-columns: 100px 1fr;
    user-select: none;
    gap: 24px;
    &:hover {
      cursor: pointer;
    }
  }
  .watch-courses-component__radio {
    position: absolute;
    visibility: hidden;
    transition: all 0.9s ease;
    &:checked ~ .watch-courses-component__course-img {
      margin-left: 24px;
      transition: all 0.9s ease;
    }
    &:checked ~ .watch-courses-component__course-title {
      color: #000000;
      transition: all 0.9s ease;
    }
  }
  //@media screen and (max-width: 1200px) {
  //  .watch-courses-component__blocks {
  //    grid-template-columns: 1fr;
  //  }
  //  .watch-courses-component__block {
  //    display: grid;
  //    grid-template-columns: 1fr 1fr 1fr;
  //  }
  //}
  @media screen and (max-width: 960px) {
    background-image: none;
    .watch-courses-component__content {
      background-image: url("/icon/finance-icon-reverse.svg");
      background-repeat: no-repeat;
      background-position: right 90px;
    }
    .watch-courses-component__blocks {
      grid-template-columns: 1fr;
    }
    .watch-courses-component__block {
      display: grid;
      grid-template-columns: 1fr 1fr;
    }
    .watch-courses-component__courses {
      justify-items: center;
    }
  }
  @media screen and (max-width: 768px) {
    .watch-courses-component__courses {
      grid-template-columns: 1fr;
    }
    .watch-courses-component__course-title {
      font-size: 16px;
    }
    .watch-courses-component__course-img {
      width: 26px;
      height: 26px;
    }
    .watch-courses-component__block {
      grid-template-columns: 1fr;
    }
    .watch-courses-component__content--title {
      font-size: 20px;
    }
  }
  @media screen and (max-width: 500px) {
    .watch-courses-component__content {
      background-position: right 100px;
    }
  }
}
</style>
