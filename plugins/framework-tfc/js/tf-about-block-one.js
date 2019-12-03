
$(window).on('resize load', function() {
    //Extra Small
    if($(window).width() < 576) {
        $('.about-blockOne-heading').removeClass('about-blockOne-headingOne about-blockOne-headingOne-mobile');
        $('.about-blockOne-heading').addClass('about-blockOne-headingOne-mobile');
    }
    //Small
    if(($(window).width() >= 576) && ($(window).width() < 768)) {
        $('.about-blockOne-heading').removeClass('about-blockOne-headingOne about-blockOne-headingOne-mobile');
        $('.about-blockOne-heading').addClass('about-blockOne-headingOne-mobile');
    }
    //Medium
    if(($(window).width() >= 768) && ($(window).width() < 992)) {
        $('.about-blockOne-heading').removeClass('about-blockOne-headingOne about-blockOne-headingOne-mobile');
        $('.about-blockOne-heading').addClass('about-blockOne-headingOne-mobile');
    }
    //Large
    if(($(window).width() >= 992) && ($(window).width() < 1200)) {
        $('.about-blockOne-heading').removeClass('about-blockOne-headingOne about-blockOne-headingOne-mobile');
        $('.about-blockOne-heading').addClass('about-blockOne-headingOne');
    }
    //Extra Large
    if($(window).width() >= 1200){
        $('.about-blockOne-heading').removeClass('about-blockOne-headingOne about-blockOne-headingOne-mobile');
        $('.about-blockOne-heading').addClass('about-blockOne-headingOne');
    }
})