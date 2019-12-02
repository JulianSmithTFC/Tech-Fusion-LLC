
$(document).ready(function(){
    $('.solutionsBlockThree-sliderRegular').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        draggable: true,
        lazyLoad: 'progressive',
        mobileFirst: true,
        swipe: true,
        accessibility: true,
        pauseOnHover: false,
        pauseOnFocus: false,
    });
    $('.solutionsBlockThree-sliderMobile').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        draggable: true,
        lazyLoad: 'progressive',
        mobileFirst: true,
        swipe: true,
        accessibility: true,
        pauseOnHover: false,
        pauseOnFocus: false,
    });
});
