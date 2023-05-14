export default ({ app, store }) => {
  app.router.afterEach(() => {
    // Отправка POST-запроса на сервер
    app.$axios.$post('/visits-api.php', {
      // Здесь вы можете передать дополнительные данные, если необходимо
    }).then((res) => {
      console.log(res.message)
    }).catch((error) => {
      console.error('Ошибка при отправке записи о посещении:', error);
    });
    app.$axios.$get('/get-session-api.php').then((res) => {
      store.dispatch("user/setUser", { user: res.user });
    }).catch((error) => {
      console.error(error);
    });
  });
};
