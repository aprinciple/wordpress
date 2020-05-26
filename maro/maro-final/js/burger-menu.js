var clicked = false;
jQuery(function($){
    $( '.btn-burger' ).click(function(){
        $('.nav .logo').show();
        $('.header .nav ul').show();
        $('.menu-close').show();
    });
    $( '.menu-close' ).click(function(){
        $('.nav .logo').hide();
        $('.header .nav ul').hide();
        $('.menu-close').hide();
    });

    if ($(window).width() < 991) {
        $('.catalog-icons').click(function () {
            if (!clicked) {
                $('.catalog-menu').show();
                $('.catalog-nav').addClass('catalog-nav-popup');
                $('.catalog-title').addClass('catalog-title-op');
                clicked = true;
            } else {
                $('.catalog-menu').hide();
                $('.catalog-nav').removeClass('catalog-nav-popup');
                $('.catalog-title').removeClass('catalog-title-op');
                clicked = false;
            }
        });
    }
});