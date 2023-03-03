<template>
  <div class="header-component">
    <div class="header-menu overflow-hidden" ref="header-parent">
      <div class="header-menu__container wrapper">
        <nuxt-link to="/" class="flex"
          ><h2 class="primary animate__animated" ref="header-text1">It</h2>
          <h2 class="text-default animate__animated" ref="header-text2">
            Boo.kz
          </h2></nuxt-link
        >
        <div class="header-menu__buttons" ref="header-buttons">
          <button @click="scrollTo('about-book')" class="header-menu__button">
            <h3 class="text-default">Кітап</h3>
          </button>
          <button class="header-menu__button text--vector" @click="scrollTo('watch-courses')">
            <h3 class="text-default">Курстар</h3>
          </button>
        </div>
      </div>
    </div>
    <div class="header-menu__mobile wrapper overflow-hidden" ref="header-mobile-parent">
      <nuxt-link to="/" class="flex"
      ><h3 class="primary animate__animated" ref="header-mobile-text1">It</h3>
        <h3 class="text-default animate__animated" ref="header-mobile-text2">
          Boo.kz
        </h3></nuxt-link
      >
      <button
        v-if="!menuActive"
        @click="menuActive = !menuActive"
        class="header-mobile__buttons"
      >
        <img class="header-icon" src="/icons/burger-dark.svg" alt="" />
      </button>
      <button v-else @click="menuActive = false" class="header-mobile__buttons">
        <img src="/icons/close.svg" alt="close" />
      </button>
    </div>
    <Transition name="fade">
      <div v-if="menuActive">
        <div class="header-menu--navigator">
          <div class="header-menu--navigator__buttons">
            <button class="header-menu--navigator__button" @click="navigate('about-book')">
              Кітап
            </button>
            <button class="header-menu--navigator__button" @click="navigate('watch-courses')">
              Курстар
            </button>
            <button class="button__primary" @click="dialogMain = true">Сұраныс қалдыру</button>
          </div>
        </div>
        <div class="header-menu--navigator__close-btn" @click="closeMenu"></div>
      </div>
    </Transition>
    <dialog-main v-if="dialogMain" @close="dialogMain = false">
      <contact-us-dialog-component />
    </dialog-main>
  </div>
</template>

<script>
import { observerAnimate } from "~/modules/Observer";
import DialogMain from "~/components/dialogs/index.vue";
import ContactUsDialogComponent from "~/components/dialogs/contact-us-dialog-component.vue";

export default {
  name: "header-component",
  components: {ContactUsDialogComponent, DialogMain},
  data() {
    return {
      menuActive: false,
      dialogMain: false
    };
  },
  watch: {
    menuActive(newValue) {
      this.bodyScroll(newValue);
    },
  },
  methods: {
    closeMenu() {
      this.menuActive = false;
    },
    navigate(e) {
      this.closeMenu()
      this.scrollTo(e)
    }
  },
  mounted() {
    observerAnimate(this.$refs["header-parent"], this.$refs["header-text1"], "animate__bounceInLeft");
    observerAnimate(this.$refs["header-parent"], this.$refs["header-text2"], "animate__bounceInDown");
    observerAnimate(this.$refs["header-mobile-parent"], this.$refs["header-mobile-text1"], "animate__bounceInLeft");
    observerAnimate(this.$refs["header-mobile-parent"], this.$refs["header-mobile-text2"], "animate__bounceInDown");
  },
};
</script>

<style scoped lang="scss">
.header-component {
  position: relative;
  top: 0;
  z-index: 10;
  .header-menu {
    background-color: white;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    padding: 16px 0;

    &__container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 24px;
    }

    &__buttons {
      display: flex;
      justify-content: space-between;
      gap: 24px;
      align-items: center;
    }
    &__button:last-child {
      h3 {
        position: relative;
        padding-right: 24px;
        &:after {
          content: url("/icons/vector-header.svg");
          position: absolute;
          top: 2px;
          bottom: 2px;
          right: 0;
        }
      }
    }
    &__button {
      border: 3px solid #2079ff;
      border-radius: $border-radius-secondary;
      padding: 4px 16px;
      cursor: pointer;
    }
  }
  .header-menu__mobile {
    padding-top: 6px;
    padding-bottom: 6px;
    display: none;
    align-items: center;
    justify-content: space-between;
    gap: 32px;
    background-color: white;
    box-shadow: 0px 4px 6px rgb(0 0 0 / 10%);

    .header-mobile__buttons {
      width: 56px;
      height: 56px;
      padding: 12px 8px;
      .header-icon {
        width: 32px;
        height: auto;
      }
    }
  }
  .header-menu--navigator {
    display: none;
    position: absolute;
    z-index: 10;
    top: calc(100% + 1px);
    right: 0;
    left: 0;
    background-color: white;
    min-height: 180px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    &__close-btn {
      display: none;
      position: absolute;
      top: calc(100% + 1px);
      right: 0;
      left: 0;
      height: 100vh;
      background-color: rgba(0, 0, 0, 0.5);
    }
    &__buttons {
      padding: 24px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
      @media screen and (max-width: 500px) {
        grid-template-columns: 1fr;
        //button {
        //  grid-row: 3;
        //}
      }
      button {
        border-radius: $border-radius-secondary;
      }
    }
    &__button {
      border: 1px solid #2079ff;
      border-radius: $border-radius-secondary;
      padding: 4px 16px;
      text-align: center;
      cursor: pointer;
      color: black;
      font-weight: 500;
      font-size: 24px;
    }
    //h3 {
    //  font-weight: 500;
    //}
    button:nth-child(2) {
      grid-row: 2;
      //h3 {
        position: relative;
        &:after {
          content: url("/icons/vector-header.svg");
          position: absolute;
          top: 6px;
          bottom: 0px;
          right: 16px;
        }
      //}
    }
  }
  @media screen and (max-width: 768px) {
    .header-menu,
    .header-menu__container {
      display: none;
    }
    .header-menu--navigator,
    .header-menu--navigator__close-btn {
      display: block;
    }
    .header-menu__mobile {
      display: flex;
    }
  }
}
</style>
