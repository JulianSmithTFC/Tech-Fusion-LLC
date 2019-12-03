
$(window).on('resize load', function() {
    //Extra Small
    if($(window).width() < 576) {
        $('.home-blockSeven-heading').removeClass('home-blockSeven-heading-desktop home-blockSeven-heading-mobile');
        $('.home-blockSeven-heading').addClass('home-blockSeven-heading-mobile');
    }
    //Small
    if(($(window).width() >= 576) && ($(window).width() < 768)) {
        $('.home-blockSeven-heading').removeClass('home-blockSeven-heading-desktop home-blockSeven-heading-mobile');
        $('.home-blockSeven-heading').addClass('home-blockSeven-heading-mobile');
    }
    //Medium
    if(($(window).width() >= 768) && ($(window).width() < 992)) {
        $('.home-blockSeven-heading').removeClass('home-blockSeven-heading-desktop home-blockSeven-heading-mobile');
        $('.home-blockSeven-heading').addClass('home-blockSeven-heading-mobile');
    }
    //Large
    if(($(window).width() >= 992) && ($(window).width() < 1200)) {
        $('.home-blockSeven-heading').removeClass('home-blockSeven-heading-desktop home-blockSeven-heading-mobile');
        $('.home-blockSeven-heading').addClass('home-blockSeven-heading-desktop');
    }
    //Extra Large
    if($(window).width() >= 1200){
        $('.home-blockSeven-heading').removeClass('home-blockSeven-heading-desktop home-blockSeven-heading-mobile');
        $('.home-blockSeven-heading').addClass('home-blockSeven-heading-desktop');
    }
})