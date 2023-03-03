import Vue from 'vue'
const GlobalFunctions = {
  install(Vue) {
    Vue.prototype.bodyScroll = (state) => {
      if (state) {
        window.document.body.classList.add('body-scroll--no-scroll')
      } else {
        window.document.body.classList.remove('body-scroll--no-scroll')
      }
    }
    Vue.prototype.scrollTo = (elId) => {
      const element = document.querySelector(`#${elId}`);
      element.scrollIntoView();
    }
  }
}
Vue.use(GlobalFunctions)
