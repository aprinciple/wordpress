jQuery(function($){
    if ($(window).width() < 991) {
        $('.house-dark, #sketch-dark, .slider-3d, .mob-to-hide').hide();
    }
});
function lightOn() {
    $('#on').removeClass('son');
    $('#on').addClass('sonlight');
    $('#off').removeClass('moonlight');
    $('#off').addClass('moon');
    document.body.style.background = "#F6F6F6";
    $('.bg img').attr("src", "/wp-content/themes/maro/assets/img/backgrounds/bg-wave.svg");
    $('.info, .catalog-menu li a, .head, .characteristics, .nav ul li a, .confidence ul li a, .copyright').removeClass('white_txt');
    $('.catalog-menu li a, .head, .characteristics, .nav ul li a, .confidence ul li a, .copyright').addClass('black_txt');
    $('.house-dark, #sketch-dark').hide();
    $('.house-light, #sketch-light').show();
    $('.owl-prev img').attr("src","/wp-content/themes/maro/assets/img/icons/prev-tall.svg");
    $('.owl-next img').attr("src","/wp-content/themes/maro/assets/img/icons/next-tall.svg");
    $('.head').css("border-bottom-color", "#283043");
    $('#header').removeClass("header-fixed-dark");
    $('#catalog-menu').removeClass("catalog-menu-dark");
    if ($(window).width() < 991) {
        $('#sketch-dark, .mob-to-hide').hide();
    }
}
function lightOff() {
    $('#off').removeClass('moon');
    $('#off').addClass('moonlight');
    $('#on').removeClass('sonlight');
    $('#on').addClass('son');
    document.body.style.background = "#283043";
    $('.bg img').attr("src", "/wp-content/themes/maro/assets/img/backgrounds/bg-wave-dark.svg");
    $('.catalog-menu li a, .head, .characteristics, .nav ul li a, .confidence ul li a, .copyright').removeClass('black_txt');
    $('.info, .catalog-menu li a, .head, .characteristics, .nav ul li a, .confidence ul li a, .copyright').addClass('white_txt');
    $('.house-light, #sketch-light').hide();
    $('.house-dark, #sketch-dark').show();
    $('.owl-prev img').attr("src","/wp-content/themes/maro/assets/img/icons/prev-long.svg");
    $('.owl-next img').attr("src","/wp-content/themes/maro/assets/img/icons/next-long.svg");
    $('.head').css("border-bottom-color", "#f6f6f6");
    $('#header').addClass("header-fixed-dark");
    $('#catalog-menu').addClass("catalog-menu-dark");
    if ($(window).width() < 991) {
        $('#sketch-light, .mob-to-hide').hide();
    }
}