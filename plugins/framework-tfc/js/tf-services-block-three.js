//AOS.init();

$(window).on('resize load', function() {
    //Extra Small
    if($(window).width() < 576) {
        $('.services-blockThree-headingBlock').removeClass('services-blockThree-headingBlock-desktop services-blockThree-headingBlock-mobile');
        $('.services-blockThree-headingBlock').addClass('services-blockThree-headingBlock-mobile');
        //$('.services-blockThree-content').removeAttribute("data-aos");
        //$('.services-blockThree-content').removeAttribute("data-aos-duration");
    }
    //Small
    if(($(window).width() >= 576) && ($(window).width() < 768)) {
        $('.services-blockThree-headingBlock').removeClass('services-blockThree-headingBlock-desktop services-blockThree-headingBlock-mobile');
        $('.services-blockThree-headingBlock').addClass('services-blockThree-headingBlock-mobile');
        //$('.services-blockThree-content').removeAttribute("data-aos");
        //$('.services-blockThree-content').removeAttribute("data-aos-duration");
    }
    //Medium
    if(($(window).width() >= 768) && ($(window).width() < 992)) {
        $('.services-blockThree-headingBlock').removeClass('services-blockThree-headingBlock-desktop services-blockThree-headingBlock-mobile');
        $('.services-blockThree-headingBlock').addClass('services-blockThree-headingBlock-mobile');
        //$('.services-blockThree-content').removeAttribute("data-aos");
        //$('.services-blockThree-content').removeAttribute("data-aos-duration");
    }
    //Large
    if(($(window).width() >= 992) && ($(window).width() < 1200)) {
        $('.services-blockThree-headingBlock').removeClass('services-blockThree-headingBlock-desktop services-blockThree-headingBlock-mobile');
        $('.services-blockThree-headingBlock').addClass('services-blockThree-headingBlock-desktop');
        //$('.services-blockThree-content').removeAttribute("data-aos");
        //$('.services-blockThree-content').removeAttribute("data-aos-duration");
        //$('.services-blockThree-content').setAttribute("data-aos", "fade-right");
        //$('.services-blockThree-content').setAttribute("data-aos-duration", "500");
    }
    //Extra Large
    if($(window).width() >= 1200){
        $('.services-blockThree-headingBlock').removeClass('services-blockThree-headingBlock-desktop services-blockThree-headingBlock-mobile');
        $('.services-blockThree-headingBlock').addClass('services-blockThree-headingBlock-desktop');
        //$('.services-blockThree-content').removeAttribute("data-aos");
        //$('.services-blockThree-content').removeAttribute("data-aos-duration");
        // $('.services-blockThree-content').setAttribute("data-aos", "fade-right");
        //$('.services-blockThree-content').setAttribute("data-aos-duration", "500");
    }
})