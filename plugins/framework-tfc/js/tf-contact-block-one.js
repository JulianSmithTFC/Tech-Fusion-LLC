
$('#collapseTabOne').on('show.bs.collapse', function() {
    $('#tab-one').removeClass('active contact-blockOne-tab-normal contact-blockOne-tab-active');
    $('#tab-two').removeClass('active contact-blockOne-tab-normal contact-blockOne-tab-active');
    $('#tab-three').removeClass('active contact-blockOne-tab-normal contact-blockOne-tab-active');

    $('#tab-one').addClass('active contact-blockOne-tab-active');
    $('#tab-two').addClass('contact-blockOne-tab-normal');
    $('#tab-three').addClass('contact-blockOne-tab-normal');

    $('#collapseTabTwo').collapse('hide');
    $('#collapseTabThree').collapse('hide');
});

$('#collapseTabTwo').on('show.bs.collapse', function() {
    $('#tab-one').removeClass('active contact-blockOne-tab-normal contact-blockOne-tab-active');
    $('#tab-two').removeClass('active contact-blockOne-tab-normal contact-blockOne-tab-active');
    $('#tab-three').removeClass('active contact-blockOne-tab-normal contact-blockOne-tab-active');

    $('#tab-two').addClass('active contact-blockOne-tab-active');
    $('#tab-one').addClass('contact-blockOne-tab-normal');
    $('#tab-three').addClass('contact-blockOne-tab-normal');

    $('#collapseTabOne').collapse('hide');
    $('#collapseTabThree').collapse('hide');
});

$('#collapseTabThree').on('show.bs.collapse', function() {
    $('#tab-one').removeClass('active contact-blockOne-tab-normal contact-blockOne-tab-active');
    $('#tab-two').removeClass('active contact-blockOne-tab-normal contact-blockOne-tab-active');
    $('#tab-three').removeClass('active contact-blockOne-tab-normal contact-blockOne-tab-active');

    $('#tab-three').addClass('active contact-blockOne-tab-active');
    $('#tab-one').addClass('contact-blockOne-tab-normal');
    $('#tab-two').addClass('contact-blockOne-tab-normal');

    $('#collapseTabOne').collapse('hide');
    $('#collapseTabTwo').collapse('hide');
});

$(window).on('resize load', function() {
    //Extra Small
    if($(window).width() < 576) {
        $('.contact-blockOne-heading').removeClass('contact-blockOne-heading-desktop contact-blockOne-heading-mobile');
        $('.contact-blockOne-heading').addClass('contact-blockOne-heading-mobile');

        $('.contact-blockTwo-heading').removeClass('contact-blockTwo-heading-desktop contact-blockTwo-heading-mobile');
        $('.contact-blockTwo-heading').addClass('contact-blockTwo-heading-mobile');
    }
    //Small
    if(($(window).width() >= 576) && ($(window).width() < 768)) {
        $('.contact-blockOne-heading').removeClass('contact-blockOne-heading-desktop contact-blockOne-heading-mobile');
        $('.contact-blockOne-heading').addClass('contact-blockOne-heading-mobile');

        $('.contact-blockTwo-heading').removeClass('contact-blockTwo-heading-desktop contact-blockTwo-heading-mobile');
        $('.contact-blockTwo-heading').addClass('contact-blockTwo-heading-mobile');
    }
    //Medium
    if(($(window).width() >= 768) && ($(window).width() < 992)) {
        $('.contact-blockOne-heading').removeClass('contact-blockOne-heading-desktop contact-blockOne-heading-mobile');
        $('.contact-blockOne-heading').addClass('contact-blockOne-heading-mobile');

        $('.contact-blockTwo-heading').removeClass('contact-blockTwo-heading-desktop contact-blockTwo-heading-mobile');
        $('.contact-blockTwo-heading').addClass('contact-blockTwo-heading-mobile');
    }
    //Large
    if(($(window).width() >= 992) && ($(window).width() < 1200)) {
        $('.contact-blockOne-heading').removeClass('contact-blockOne-heading-desktop contact-blockOne-heading-mobile');
        $('.contact-blockOne-heading').addClass('contact-blockOne-heading-desktop');

        $('.contact-blockTwo-heading').removeClass('contact-blockTwo-heading-desktop contact-blockTwo-heading-mobile');
        $('.contact-blockTwo-heading').addClass('contact-blockTwo-heading-desktop');
    }
    //Extra Large
    if($(window).width() >= 1200){
        $('.contact-blockOne-heading').removeClass('contact-blockOne-heading-desktop contact-blockOne-heading-mobile');
        $('.contact-blockOne-heading').addClass('contact-blockOne-heading-desktop');

        $('.contact-blockTwo-heading').removeClass('contact-blockTwo-heading-desktop home-blockOne-headingOne-mobile');
        $('.contact-blockTwo-heading').addClass('contact-blockTwo-heading-desktop');
    }
})

$("#contact-form-one-btn").on('click', function () {
    $("#contact-form-one").submit();
})

$("#contact-form-two-btn").on('click', function () {
    $("#contact-form-two").submit();
})