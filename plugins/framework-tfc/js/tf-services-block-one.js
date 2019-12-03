
$(window).on('resize load', function() {
    //Extra Small
    if($(window).width() < 576) {
        $('.services-blockOne-heading').removeClass('services-blockOne-headingOne services-blockOne-headingOne-mobile');
        $('.services-blockOne-heading').addClass('services-blockOne-headingOne-mobile');
    }
    //Small
    if(($(window).width() >= 576) && ($(window).width() < 768)) {
        $('.services-blockOne-heading').removeClass('services-blockOne-headingOne services-blockOne-headingOne-mobile');
        $('.services-blockOne-heading').addClass('services-blockOne-headingOne-mobile');
    }
    //Medium
    if(($(window).width() >= 768) && ($(window).width() < 992)) {
        $('.services-blockOne-heading').removeClass('services-blockOne-headingOne services-blockOne-headingOne-mobile');
        $('.services-blockOne-heading').addClass('services-blockOne-headingOne-mobile');
    }
    //Large
    if(($(window).width() >= 992) && ($(window).width() < 1200)) {
        $('.services-blockOne-heading').removeClass('services-blockOne-headingOne services-blockOne-headingOne-mobile');
        $('.services-blockOne-heading').addClass('services-blockOne-headingOne');
    }
    //Extra Large
    if($(window).width() >= 1200){
        $('.services-blockOne-heading').removeClass('services-blockOne-headingOne services-blockOne-headingOne-mobile');
        $('.services-blockOne-heading').addClass('services-blockOne-headingOne');
    }
})