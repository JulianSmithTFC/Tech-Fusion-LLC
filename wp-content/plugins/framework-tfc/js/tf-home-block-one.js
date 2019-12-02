
$(window).on('resize load', function() {
    //Extra Small
    if($(window).width() < 576) {
        $('.home-blockOne-heading').removeClass('home-blockOne-headingOne home-blockOne-headingOne-mobile');
        $('.home-blockOne-heading').addClass('home-blockOne-headingOne-mobile');
    }
    //Small
    if(($(window).width() >= 576) && ($(window).width() < 768)) {
        $('.home-blockOne-heading').removeClass('home-blockOne-headingOne home-blockOne-headingOne-mobile');
        $('.home-blockOne-heading').addClass('home-blockOne-headingOne-mobile');
    }
    //Medium
    if(($(window).width() >= 768) && ($(window).width() < 992)) {
        $('.home-blockOne-heading').removeClass('home-blockOne-headingOne home-blockOne-headingOne-mobile');
        $('.home-blockOne-heading').addClass('home-blockOne-headingOne-mobile');
    }
    //Large
    if(($(window).width() >= 992) && ($(window).width() < 1200)) {
        $('.home-blockOne-heading').removeClass('home-blockOne-headingOne home-blockOne-headingOne-mobile');
        $('.home-blockOne-heading').addClass('home-blockOne-headingOne');
    }
    //Extra Large
    if($(window).width() >= 1200){
        $('.home-blockOne-heading').removeClass('home-blockOne-headingOne home-blockOne-headingOne-mobile');
        $('.home-blockOne-heading').addClass('home-blockOne-headingOne');
    }
})