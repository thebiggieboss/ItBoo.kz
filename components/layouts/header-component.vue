<template>
  <div class="header-component">
    <div class="header-menu overflow-hidden" ref="header-parent">
      <div class="header-menu__container wrapper">
        <nuxt-link to="/" class="flex">
          <h2 class="primary animate__animated" ref="header-text1">It</h2>
          <h2 class="text-default animate__animated" ref="header-text2">
            Boo.kz
          </h2>
        </nuxt-link>
        <div class="header-menu__buttons" ref="header-buttons">
          <button @click="scrollTo('about-book')" class="header-menu__button" v-if="$route.name === 'index'">
            <h3 class="text-default text-xl">Кітап</h3>
          </button>
          <button class="header-menu__button text--vector" @click="scrollTo('watch-courses')" v-if="$route.name === 'index'">
            <h3 class="text-default text-xl">Курстар</h3>
          </button>
          <nuxt-link to="/rating" class="header-menu__button" v-if="$route.name === 'esepter-tizimi'">
            <h3 class="text-default text-xl text-center">Рейтинг</h3>
          </nuxt-link>
          <nuxt-link to="/esepter-tizimi" class="header-menu__button" v-if="$route.name === 'rating' || $route.name === 'esepter-tizimi-id'">
            <h3 class="text-default text-xl text-center">Есептер</h3>
          </nuxt-link>
          <nuxt-link to="/" class="header-menu__button header-menu__button--text-svg" v-if="$route.name === 'esepter-tizimi' || $route.name === 'rating' || $route.name === 'esepter-tizimi-id'">
            <h3 class="text-default text-xl">Басты бет</h3>
          </nuxt-link>
          <nuxt-link to="/esepter-tizimi" class="header-menu__button header-menu__button--text-svg" v-if="$route.name === 'index'">
            <h3 class="text-default text-xl">Есептерді шығару</h3>
          </nuxt-link>
          <div class="header-menu__user" :class="headerAccountVisible ? 'header-menu__user--is-active' : ''">
            <img
              src="/icon/user-icon.svg"
              alt=""
              class="header-menu__user-icon" @click="headerAccountVisible = !headerAccountVisible"
              :class="Object.keys($store.state.user.user).length ? 'header-menu__user-icon--is-non-active' : ''">
            <div class="header-menu__user-info">
              <div class="header-menu__user-info--items">
                <div v-if="Object.keys($store.state.user.user).length">
                  <div class="header-menu__user-info--item">
                    Сәлем {{$store.state.user.user.fname}}
                  </div>
                  <hr>
                  <div @click="logout" class="header-menu__user-info--item">
                    <span class="text-[#FF4242]">
                      Выйти
                    </span>
                  </div>
                </div>
                <div v-else>
                  <div class="header-menu__user-info--item">
                    <nuxt-link to="/login">
                      Сайтқа кіру
                    </nuxt-link>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
        <img class="header-icon" src="/icon/burger-dark.svg" alt="" />
      </button>
      <button v-else @click="menuActive = false" class="header-mobile__buttons">
        <img src="/icon/close.svg" alt="close" />
      </button>
    </div>
    <Transition name="fade">
      <div v-if="menuActive">
        <div class="header-menu--navigator">
          <div class="header-menu--navigator__buttons">
            <button class="header-menu--navigator__button" @click="navigate('about-book')"  v-if="$route.name === 'index'">
              Кітап
            </button>
            <button class="header-menu--navigator__button" @click="navigate('watch-courses')"  v-if="$route.name === 'index'">
              Курстар
            </button>
            <div @click="menuActive = false" class="header-menu--navigator__redirect-button" v-if="$route.name === 'esepter-tizimi'">
              <nuxt-link to="/rating" class="header-menu--navigator__button header-menu--navigator__nuxt-button">Рейтинг
              </nuxt-link>
            </div>
            <nuxt-link to="/"  v-if="$route.name === 'esepter-tizimi' || $route.name === 'rating' || $route.name === 'esepter-tizimi-id'">
              <button @click="menuActive = false" class="header-menu--navigator__button">
                Басты бет
              </button>
            </nuxt-link>
            <button class="button__primary flex items-center justify-center h-[36px]" @click="openDialog">Сұраныс қалдыру</button>
            <div @click="menuActive = false" class="header-menu--navigator__redirect-button" v-if="$route.name === 'index' || $route.name === 'rating' || $route.name === 'esepter-tizimi-id'">
              <nuxt-link to="/esepter-tizimi" class="header-menu--navigator__button header-menu--navigator__nuxt-button">Есептерді шығару
              </nuxt-link>
            </div>
          </div>
          <hr class="border-black">
          <div class="header-menu--navigator__user">
            <div v-if="Object.keys($store.state.user.user).length">
              <div class="header-menu--navigator__user--info">
                Сәлем {{$store.state.user.user.fname}}
              </div>
              <hr>
              <div @click="logout" class="header-menu--navigator__user--info">
                <span class="text-[#FF4242]">
                  Выйти
                </span>
              </div>
            </div>
            <div v-else>
              <nuxt-link to="/login">
                <div class="header-menu--navigator__user--info">
                  Сайтқа кіру
                </div>
              </nuxt-link>
            </div>
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
import axios from "axios";

export default {
  name: "header-component",
  components: {ContactUsDialogComponent, DialogMain},
  data() {
    return {
      menuActive: false,
      dialogMain: false,
      headerAccountVisible: false
    };
  },
  watch: {
    menuActive(newValue) {
      this.bodyScroll(newValue);
    },
  },
  methods: {
    openDialog() {
      this.menuActive = false;
      this.dialogMain = true;
    },
    closeMenu() {
      this.menuActive = false;
    },
    navigate(e) {
      this.closeMenu()
      this.scrollTo(e)
    },
    async logout() {
      try {
        const res = await axios.get('/logout-api.php')
        this.$toast.open({
          message: res.data.message,
          type: res.data.status ? "success" : "warning"
        })
        this.$router.go(0)
        this.headerAccountVisible = false
      } catch (e) {
        this.$toast.open({
          message: e.message,
          type: "error"
        })
      }
    },
    close(e) {
      if (!this.$el.contains(e.target)) {
          this.headerAccountVisible = false
         }
      }
    },
  mounted() {
    document.addEventListener('click', this.close)
    observerAnimate(this.$refs["header-parent"], this.$refs["header-text1"], "animate__bounceInLeft");
    observerAnimate(this.$refs["header-parent"], this.$refs["header-text2"], "animate__bounceInDown");
    observerAnimate(this.$refs["header-mobile-parent"], this.$refs["header-mobile-text1"], "animate__bounceInLeft");
    observerAnimate(this.$refs["header-mobile-parent"], this.$refs["header-mobile-text2"], "animate__bounceInDown");
  },
};
</script>

<style scoped lang="scss">
.header-component {
  position: sticky;
  top: 0;
  z-index: 1000;
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
    &__user {
      &--is-active {
        .header-menu__user-info {
          max-height: max-content;
          display: block;
          z-index: 1000;
        }
      }
    }
    &__user-info {
      display: none;
      max-height: 0;
      position: absolute;
      top: 100%;
      right: 6px;
      padding-top: 10px;
      transition-duration: 0.3s;
      &--items {
        background-color: rgba(#fff, 0.99);
        box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        &:before {
          content: "";
          position: absolute;
          top: 8px;
          right: 8px;
          width: 20px;
          height: 20px;
          background-color: #FFFFFF;
          transform: rotate(45deg);

        }
      }
      &--item {
        display: block;
        width: 100%;
        background-color: transparent;
        font-weight: 500;
        color: #444;
        padding: 10px 40px;
        text-align: center;
        cursor: pointer;
        transition-duration: 0.3s;
        border-radius: 2rem;
        position: relative;
        z-index: 1000;
        &:hover {
          background-color: rgba(#000, 0.025);
          color: $primary;
        }
      }
    }
    &__user-icon {
      width: 34px;
      cursor: pointer;
      &--is-non-active {
        filter: invert(56%) sepia(78%) saturate(460%) hue-rotate(90deg) brightness(103%) contrast(88%);
      }
    }
    &__buttons {
      display: grid;
      grid-template-columns: 1fr 1fr auto auto;
      gap: 24px;
      align-items: center;
    }
    &__button--text-svg {
      h3 {
        position: relative;
        padding-right: 24px;
        &:after {
          content: url("/icon/vector-header.svg");
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
      @media screen and (max-width: 560px) {
        grid-template-columns: 1fr;
        //button {
        //  grid-row: 3;
        //}
      }
      button {
        border-radius: $border-radius-secondary;
      }
    }
    &__user {
      padding: 10px;
      &--info {
        display: block;
        width: 100%;
        background-color: transparent;
        font-weight: 500;
        color: #444;
        padding: 10px 0;
        text-align: center;
        cursor: pointer;
        transition-duration: 0.3s;
        z-index: 1000;
        &:hover {
          background-color: rgba(#000, 0.025);
          color: $primary;
        }
      }
    }
    &__button {
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #2079ff;
      border-radius: $border-radius-secondary;
      padding: 4px 16px;
      text-align: center;
      cursor: pointer;
      color: black;
      font-weight: 500;
      font-size: 20px;
      height: 36px;
    }
    //h3 {
    //  font-weight: 500;
    //}
    &__nuxt-button {
      //h3 {
        position: relative;
        &:after {
          content: url("/icon/vector-header.svg");
          position: absolute;
          top: 8px;
          bottom: 0px;
          right: 16px;
          @media screen and (max-width: 560px) {
            top: 6px;
          }
        }
      //}
    }
  }
  @media screen and (max-width: 768px) {
    .header-menu,
    .header-menu__container {
      display: none;
    }
    .header-menu--navigator {
      &__redirect-button {
        grid-row: 3;
      }
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
