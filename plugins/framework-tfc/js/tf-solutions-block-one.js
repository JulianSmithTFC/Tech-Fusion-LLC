
$(document).ready(function(){
    $('.solutionsBlockOne-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
        draggable: true,
        lazyLoad: 'progressive',
        swipe: true,
        accessibility: true,
        pauseOnHover: false,
        pauseOnFocus: false,
    });
});

$('#nextIcon').on('click', function(){
    $('.solutionsBlockOne-slider').slick('slickNext');
});
$('#perIcon').on('click', function(){
    $('.solutionsBlockOne-slider').slick('slickPrev');
});


$('.solutionsBlockOne-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    function removeAllNavCircle() {
        $('#SBO-NavOne').removeClass( "SBO-NavCircleActive" ).addClass( "SBO-NavCircle" );
        $('#SBO-NavTwo').removeClass( "SBO-NavCircleActive" ).addClass( "SBO-NavCircle" );
        $('#SBO-NavThree').removeClass( "SBO-NavCircleActive" ).addClass( "SBO-NavCircle" );
        $('#SBO-NavFour').removeClass( "SBO-NavCircleActive" ).addClass( "SBO-NavCircle" );
    }
    if (nextSlide == 0){
        removeAllNavCircle();
        $('#SBO-NavOne').removeClass("SBO-NavCircle").addClass( "SBO-NavCircleActive" );
    }
    if (nextSlide == 1){
        removeAllNavCircle();
        $('#SBO-NavOne').removeClass("SBO-NavCircle").addClass( "SBO-NavCircleActive" );
        $('#SBO-NavTwo').removeClass("SBO-NavCircle").addClass( "SBO-NavCircleActive" );
    }
    if (nextSlide == 2){
        removeAllNavCircle();
        $('#SBO-NavOne').removeClass("SBO-NavCircle").addClass( "SBO-NavCircleActive" );
        $('#SBO-NavTwo').removeClass("SBO-NavCircle").addClass( "SBO-NavCircleActive" );
        $('#SBO-NavThree').removeClass("SBO-NavCircle").addClass( "SBO-NavCircleActive" );
    }
    if (nextSlide == 3){
        removeAllNavCircle();
        $('#SBO-NavOne').removeClass("SBO-NavCircle").addClass( "SBO-NavCircleActive" );
        $('#SBO-NavTwo').removeClass("SBO-NavCircle").addClass( "SBO-NavCircleActive" );
        $('#SBO-NavThree').removeClass("SBO-NavCircle").addClass( "SBO-NavCircleActive" );
        $('#SBO-NavFour').removeClass("SBO-NavCircle").addClass( "SBO-NavCircleActive" );
    }
});

function goToSlideOne() {
    $('.solutionsBlockOne-slider').slick('slickGoTo', 0);
}
function goToSlideTwo() {
    $('.solutionsBlockOne-slider').slick('slickGoTo', 1);
}
function goToSlideThree() {
    $('.solutionsBlockOne-slider').slick('slickGoTo', 2);
}
function goToSlideFour() {
    $('.solutionsBlockOne-slider').slick('slickGoTo', 3);
}

$(window).on('resize load', function() {
    //Extra Small
    if($(window).width() < 576) {
        $('.soulutions-blockOne-heading').removeClass('soulutions-blockOne-heading-desktop soulutions-blockOne-heading-mobile');
        $('.soulutions-blockOne-heading').addClass('soulutions-blockOne-heading-mobile');
        //$('#solutions-blockOne-container').removeClass('home-menuAndBlockOne-background');
    }
    //Small
    if(($(window).width() >= 576) && ($(window).width() < 768)) {
        $('.soulutions-blockOne-heading').removeClass('soulutions-blockOne-heading-desktop soulutions-blockOne-heading-mobile');
        $('.soulutions-blockOne-heading').addClass('soulutions-blockOne-heading-mobile');
        //$('#solutions-blockOne-container').removeClass('home-menuAndBlockOne-background');
    }
    //Medium
    if(($(window).width() >= 768) && ($(window).width() < 992)) {
        $('.soulutions-blockOne-heading').removeClass('soulutions-blockOne-heading-desktop soulutions-blockOne-heading-mobile');
        $('.soulutions-blockOne-heading').addClass('soulutions-blockOne-heading-mobile');
        //$('#solutions-blockOne-container').removeClass('home-menuAndBlockOne-background');
        //$('#solutions-blockOne-container').addClass('home-menuAndBlockOne-background');
    }
    //Large
    if(($(window).width() >= 992) && ($(window).width() < 1200)) {
        $('.soulutions-blockOne-heading').removeClass('soulutions-blockOne-heading-desktop soulutions-blockOne-heading-mobile');
        $('.soulutions-blockOne-heading').addClass('soulutions-blockOne-heading-desktop');
        //$('#solutions-blockOne-container').removeClass('home-menuAndBlockOne-background');
        //$('#solutions-blockOne-container').addClass('home-menuAndBlockOne-background');
    }
    //Extra Large
    if($(window).width() >= 1200){
        $('.soulutions-blockOne-heading').removeClass('soulutions-blockOne-heading-desktop soulutions-blockOne-heading-mobile');
        $('.soulutions-blockOne-heading').addClass('soulutions-blockOne-heading-desktop');
        //$('#solutions-blockOne-container').removeClass('home-menuAndBlockOne-background');
        //$('#solutions-blockOne-container').addClass('home-menuAndBlockOne-background');
    }
})