jQuery(function($){
    $('#sketch-dark').hide();
});
function lightOn() {
    $('#on').removeClass('son');
    $('#on').addClass('sonlight');
    $('#off').removeClass('moonlight');
    $('#off').addClass('moon');
    $('.page-single-full__promo-figure').removeClass('page-single-full__promo-figure--dark');
    $('#sketch-dark').hide();
    $('#sketch-light').show();
}
function lightOff() {
    $('#off').removeClass('moon');
    $('#off').addClass('moonlight');
    $('#on').removeClass('sonlight');
    $('#on').addClass('son');
    $('.page-single-full__promo-figure').addClass('page-single-full__promo-figure--dark');
    $('#sketch-light').hide();
    $('#sketch-dark').show();
}