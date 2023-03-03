function observerAnimate(parentClass, el, animation) {
  const callback = (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        el.classList.add(animation)
        return
      }
      el.classList.remove(animation)
    })
  }
  const observer = new IntersectionObserver(callback, {

  })
  observer.observe(parentClass)
}
export {
  observerAnimate,
}
