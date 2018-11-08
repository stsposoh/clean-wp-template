;(function () {
    'use-strict';


alert(66)












  //Запрет перетаскивать картинки
  jQuery("img, a").on("dragstart", function (event) {
    event.preventDefault();
  });

})();