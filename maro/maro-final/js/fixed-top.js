jQuery("document").ready(function($){
    var header = $('.header');
    var nav = $('.nav ul li .policolor');
    $(window).scroll(function () {
        var b = $(window).scrollTop();
        var h = $('.header').height();
        var h2 = h + 700;
        if( b > h ){
            header.addClass("header-fixed");
            /*if(b > h2)
            {
                nav.removeClass("white_txt");
                $('.instagram').addClass("instagram-black");
                $('.facebook').addClass("facebook-black");
                $('.whatsapp').addClass("whatsapp-black");
                $('.youtube').addClass("youtube-black");
            }
            else
            {
                nav.addClass("white_txt");
                $('.instagram').removeClass("instagram-black");
                $('.facebook').removeClass("facebook-black");
                $('.whatsapp').removeClass("whatsapp-black");
                $('.youtube').removeClass("youtube-black");
            }*/
        } else {
            // header.removeClass("header-fixed");
        }
    });
});