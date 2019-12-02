
$(window).on('resize load', function() {
    //Extra Small
    if($(window).width() < 576) {
        $('.subservices-blockOne-heading').removeClass('subservices-blockOne-headingOne subservices-blockOne-headingOne-mobile');
        $('.subservices-blockOne-heading').addClass('subservices-blockOne-headingOne-mobile');
    }
    //Small
    if(($(window).width() >= 576) && ($(window).width() < 768)) {
        $('.subservices-blockOne-heading').removeClass('subservices-blockOne-headingOne subservices-blockOne-headingOne-mobile');
        $('.subservices-blockOne-heading').addClass('subservices-blockOne-headingOne-mobile');
    }
    //Medium
    if(($(window).width() >= 768) && ($(window).width() < 992)) {
        $('.subservices-blockOne-heading').removeClass('subservices-blockOne-headingOne subservices-blockOne-headingOne-mobile');
        $('.subservices-blockOne-heading').addClass('subservices-blockOne-headingOne-mobile');
    }
    //Large
    if(($(window).width() >= 992) && ($(window).width() < 1200)) {
        $('.subservices-blockOne-heading').removeClass('subservices-blockOne-headingOne subservices-blockOne-headingOne-mobile');
        $('.subservices-blockOne-heading').addClass('subservices-blockOne-headingOne');
    }
    //Extra Large
    if($(window).width() >= 1200){
        $('.subservices-blockOne-heading').removeClass('subservices-blockOne-headingOne subservices-blockOne-headingOne-mobile');
        $('.subservices-blockOne-heading').addClass('subservices-blockOne-headingOne');
    }
})