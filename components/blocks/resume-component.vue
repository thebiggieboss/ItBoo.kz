<template>
  <div class="resume-component pb-16 pt-16">
    <div class="resume-component__content wrapper">
      <h2 class="text-black pb-12">Тәжірибелі және кәсіби тәлімгер</h2>
      <div class="resume-component__blocks">
        <div class="resume-component__block">
          <img src="/images/mentor.png" alt="">
          <div>
            <h2 class="text-black text-center">Magzhan Kairanbay</h2>
            <h3 class="text-center">Senior Instructor</h3>
          </div>
        </div>
        <div class="resume-component__description">
          <img src="/icon/yoga-icon.svg" alt="" class="justify-self-center">
          <p class="text-black font-normal">Машинаны үйрету саласында 2012 жылдан бері жұмыс істеп келе жатыр. 2020 жылы Малазиялық Multimedia University университетінде машинаны үйрету саласы бойынша ғылым докторы атанған. 2018 жылдан бері Suleiman Demirel University университетінде машинаны үйрету және компьютерлік көру курстары бойынша аға оқытушы болып қызмет атқарады. Сонымен қатар Оңтүстік Шығыс Азиядағы SOCAR, AirAsia, 123rf, Bolttech сияқты компанияларда "аға машинаны үйрету" инженері болып жұмыс істеген. Қазір Сингапурлық Bolttech компаниясында "аға машинаны үйрету" инженері болып жұмыс атқарады. Қазіргі таңда Мағжан Қайранбай жасаған машинаны үйрету жобалары Оңтүстік Шығыс Азия және Еуропа нарығында кеңінен қолданылады.</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "resume-component"
}
</script>

<style scoped lang="scss">
.resume-component {
  .resume-component__content {

  }
  .resume-component__blocks {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
  }
  .resume-component__block {
    display: grid;
    gap: 12px;
  }
  .resume-component__description {
    display: grid;
    gap: 12px;
  }
  @media screen and (max-width: 960px) {
    .resume-component__content {
      text-align: center;
    }
    .resume-component__blocks {
      grid-template-columns: 1fr;
    }
    .resume-component__block {
      img {
        justify-self: center;
      }
    }
    .resume-component__description {
      background-image: url("/icon/yoga-icon-opacity.svg");
      background-repeat: no-repeat;
      background-position: center;

      img {
        display: none;
      }
    }
  }
}
</style>
