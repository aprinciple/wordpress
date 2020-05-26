jQuery("document").ready(function ($) {
  var pageHome = document.querySelector('.p-home');
  if (!pageHome) {
    var header = $('.header');
    var nav = $('.nav ul li .policolor');
    $(window).scroll(function () {
      var b = $(window).scrollTop();
      var h = $('.header').height();
      var h2 = h + 700;
      if (b > h) {
        header.addClass("header-fixed");
      } else {
        // header.removeClass("header-fixed");
      }
    });
  }
});