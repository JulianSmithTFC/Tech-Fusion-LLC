$(window).on('resize load', function() {
    //Extra Small
    if($(window).width() < 576) {
        testTwo();
    }
    //Small
    if(($(window).width() >= 576) && ($(window).width() < 768)) {
        testTwo();
    }
    //Medium
    if(($(window).width() >= 768) && ($(window).width() < 992)) {
        testTwo();
    }
    //Large
    if(($(window).width() >= 992) && ($(window).width() < 1200)) {
        test();
        //testThree();
    }
    //Extra Large
    if($(window).width() >= 1200){
        test();
        //testThree();
    }
})

function testTwo() {
    if ($('#collapseRight-0').length){
        $('#subservices-blockSeven-accordian-0').addClass('subservices-blockSeven-accordianOne-shown subservices-blockSeven-accordian');
    }
    if ($('#collapseRight-1').length){
        $('#subservices-blockSeven-accordian-1').addClass('subservices-blockSeven-accordianTwo-shown subservices-blockSeven-accordian');
    }
    if ($('#collapseRight-2').length){
        $('#subservices-blockSeven-accordian-2').addClass('subservices-blockSeven-accordianThree-shown subservices-blockSeven-accordian');
    }
    if ($('#collapseRight-3').length){
        $('#subservices-blockSeven-accordian-3').addClass('subservices-blockSeven-accordianFour-shown subservices-blockSeven-accordian');
    }
    if ($('#collapseRight-4').length){
        $('#subservices-blockSeven-accordian-4').addClass('subservices-blockSeven-accordianFive-shown subservices-blockSeven-accordian');
    }
    if ($('#collapseRight-5').length){
        $('#subservices-blockSeven-accordian-5').addClass('subservices-blockSeven-accordianSix-shown subservices-blockSeven-accordian');
    }
}


function testThree() {
    if ($('#collapseRight-0').length){
        $('#subservices-blockSeven-accordian-0').removeClass('subservices-blockSeven-accordianOne-shown subservices-blockSeven-accordian');
    }
    if ($('#collapseRight-1').length){
        $('#subservices-blockSeven-accordian-1').removeClass('subservices-blockSeven-accordianTwo-shown subservices-blockSeven-accordian');
    }
    if ($('#collapseRight-2').length){
        $('#subservices-blockSeven-accordian-2').removeClass('subservices-blockSeven-accordianThree-shown subservices-blockSeven-accordian');
    }
    if ($('#collapseRight-3').length){
        $('#subservices-blockSeven-accordian-3').removeClass('subservices-blockSeven-accordianFour-shown subservices-blockSeven-accordian');
    }
    if ($('#collapseRight-4').length){
        $('#subservices-blockSeven-accordian-4').removeClass('subservices-blockSeven-accordianFive-shown subservices-blockSeven-accordian');
    }
    if ($('#collapseRight-5').length){
        $('#subservices-blockSeven-accordian-5').removeClass('subservices-blockSeven-accordianSix-shown subservices-blockSeven-accordian');
    }
}





function test() {
    if ($('#collapseRight-0').length){
        $('#collapseRight-0').on('show.bs.collapse', function () {
            $('#subservices-blockSeven-image-0').collapse('show');
            $('#subservices-blockSeven-image-0').addClass('show');
            $('#subservices-blockSeven-accordian-0').addClass('subservices-blockSeven-accordianOne-shown subservices-blockSeven-accordian');
            if($('#subservices-blockSeven-image-1').length){
                $('#subservices-blockSeven-image-1').collapse('hide');
                $('#subservices-blockSeven-image-1').removeClass('show');
                $('#subservices-blockSeven-accordian-1').removeClass('subservices-blockSeven-accordianTwo-shown');
                $('#subservices-blockSeven-accordian-1').removeClass('subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-2').length){
                $('#subservices-blockSeven-image-2').collapse('hide');
                $('#subservices-blockSeven-image-2').removeClass('show');
                $('#subservices-blockSeven-accordian-2').removeClass('subservices-blockSeven-accordianThree-shown');
                $('#subservices-blockSeven-accordian-2').removeClass('subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-3').length){
                $('#subservices-blockSeven-image-3').collapse('hide');
                $('#subservices-blockSeven-image-3').removeClass('show');
                $('#subservices-blockSeven-accordian-3').removeClass('subservices-blockSeven-accordianFour-shown');
                $('#subservices-blockSeven-accordian-3').removeClass('subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-4').length){
                $('#subservices-blockSeven-image-4').collapse('hide');
                $('#subservices-blockSeven-image-4').removeClass('show');
                $('#subservices-blockSeven-accordian-4').removeClass('subservices-blockSeven-accordianFive-shown');
                $('#subservices-blockSeven-accordian-4').removeClass('subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-5').length){
                $('#subservices-blockSeven-image-5').collapse('hide');
                $('#subservices-blockSeven-image-5').removeClass('show');
                $('#subservices-blockSeven-accordian-5').removeClass('subservices-blockSeven-accordianSix-shown');
                $('#subservices-blockSeven-accordian-5').removeClass('subservices-blockSeven-accordian');
            }
        })
    }

    if ($('#collapseRight-1').length){
        $('#collapseRight-1').on('show.bs.collapse', function () {
            $('#subservices-blockSeven-image-1').collapse('show');
            $('#subservices-blockSeven-image-1').addClass('show');
            $('#subservices-blockSeven-accordian-1').addClass('subservices-blockSeven-accordianTwo-shown subservices-blockSeven-accordian');
            if($('#subservices-blockSeven-image-0').length){
                $('#subservices-blockSeven-image-0').collapse('hide');
                $('#subservices-blockSeven-image-0').removeClass('show');
                $('#subservices-blockSeven-accordian-0').removeClass('subservices-blockSeven-accordianOne-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-2').length){
                $('#subservices-blockSeven-image-2').collapse('hide');
                $('#subservices-blockSeven-image-2').removeClass('show');
                $('#subservices-blockSeven-accordian-2').removeClass('subservices-blockSeven-accordianThree-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-3').length){
                $('#subservices-blockSeven-image-3').collapse('hide');
                $('#subservices-blockSeven-image-3').removeClass('show');
                $('#subservices-blockSeven-accordian-3').removeClass('subservices-blockSeven-accordianFour-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-4').length){
                $('#subservices-blockSeven-image-4').collapse('hide');
                $('#subservices-blockSeven-image-4').removeClass('show');
                $('#subservices-blockSeven-accordian-4').removeClass('subservices-blockSeven-accordianFive-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-5').length){
                $('#subservices-blockSeven-image-5').collapse('hide');
                $('#subservices-blockSeven-image-5').removeClass('show');
                $('#subservices-blockSeven-accordian-5').removeClass('subservices-blockSeven-accordianSix-shown subservices-blockSeven-accordian');
            }
        })
    }

    if ($('#collapseRight-2').length){
        $('#collapseRight-2').on('show.bs.collapse', function () {
            $('#subservices-blockSeven-image-2').collapse('show');
            $('#subservices-blockSeven-image-2').addClass('show');
            $('#subservices-blockSeven-accordian-2').addClass('subservices-blockSeven-accordianThree-shown subservices-blockSeven-accordian');
            if($('#subservices-blockSeven-image-0').length){
                $('#subservices-blockSeven-image-0').collapse('hide');
                $('#subservices-blockSeven-image-0').removeClass('show');
                $('#subservices-blockSeven-accordian-0').removeClass('subservices-blockSeven-accordianOne-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-1').length){
                $('#subservices-blockSeven-image-1').collapse('hide');
                $('#subservices-blockSeven-image-1').removeClass('show');
                $('#subservices-blockSeven-accordian-1').removeClass('subservices-blockSeven-accordianTwo-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-3').length){
                $('#subservices-blockSeven-image-3').collapse('hide');
                $('#subservices-blockSeven-image-3').removeClass('show');
                $('#subservices-blockSeven-accordian-3').removeClass('subservices-blockSeven-accordianFour-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-4').length){
                $('#subservices-blockSeven-image-4').collapse('hide');
                $('#subservices-blockSeven-image-4').removeClass('show');
                $('#subservices-blockSeven-accordian-4').removeClass('subservices-blockSeven-accordianFive-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-5').length){
                $('#subservices-blockSeven-image-5').collapse('hide');
                $('#subservices-blockSeven-image-5').removeClass('show');
                $('#subservices-blockSeven-accordian-5').removeClass('subservices-blockSeven-accordianSix-shown subservices-blockSeven-accordian');
            }
        })
    }

    if ($('#collapseRight-3').length){
        $('#collapseRight-3').on('show.bs.collapse', function () {
            $('#subservices-blockSeven-image-3').collapse('show');
            $('#subservices-blockSeven-image-3').addClass('show');
            $('#subservices-blockSeven-accordian-3').addClass('subservices-blockSeven-accordianFour-shown subservices-blockSeven-accordian');
            if($('#subservices-blockSeven-image-0').length){
                $('#subservices-blockSeven-image-0').collapse('hide');
                $('#subservices-blockSeven-image-0').removeClass('show');
                $('#subservices-blockSeven-accordian-0').removeClass('subservices-blockSeven-accordianOne-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-1').length){
                $('#subservices-blockSeven-image-1').collapse('hide');
                $('#subservices-blockSeven-image-1').removeClass('show');
                $('#subservices-blockSeven-accordian-1').removeClass('subservices-blockSeven-accordianTwo-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-2').length){
                $('#subservices-blockSeven-image-2').collapse('hide');
                $('#subservices-blockSeven-image-2').removeClass('show');
                $('#subservices-blockSeven-accordian-2').removeClass('subservices-blockSeven-accordianThree-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-4').length){
                $('#subservices-blockSeven-image-4').collapse('hide');
                $('#subservices-blockSeven-image-4').removeClass('show');
                $('#subservices-blockSeven-accordian-4').removeClass('subservices-blockSeven-accordianFive-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-5').length){
                $('#subservices-blockSeven-image-5').collapse('hide');
                $('#subservices-blockSeven-image-5').removeClass('show');
                $('#subservices-blockSeven-accordian-5').removeClass('subservices-blockSeven-accordianSix-shown subservices-blockSeven-accordian');
            }
        })
    }

    if ($('#collapseRight-4').length){
        $('#collapseRight-4').on('show.bs.collapse', function () {
            $('#subservices-blockSeven-image-4').collapse('show');
            $('#subservices-blockSeven-image-4').addClass('show');
            $('#subservices-blockSeven-accordian-4').addClass('subservices-blockSeven-accordianFive-shown subservices-blockSeven-accordian');
            if($('#subservices-blockSeven-image-0').length){
                $('#subservices-blockSeven-image-0').collapse('hide');
                $('#subservices-blockSeven-image-0').removeClass('show');
                $('#subservices-blockSeven-accordian-0').removeClass('subservices-blockSeven-accordianOne-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-1').length){
                $('#subservices-blockSeven-image-1').collapse('hide');
                $('#subservices-blockSeven-image-1').removeClass('show');
                $('#subservices-blockSeven-accordian-1').removeClass('subservices-blockSeven-accordianTwo-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-2').length){
                $('#subservices-blockSeven-image-2').collapse('hide');
                $('#subservices-blockSeven-image-2').removeClass('show');
                $('#subservices-blockSeven-accordian-2').removeClass('subservices-blockSeven-accordianThree-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-3').length){
                $('#subservices-blockSeven-image-3').collapse('hide');
                $('#subservices-blockSeven-image-3').removeClass('show');
                $('#subservices-blockSeven-accordian-3').removeClass('subservices-blockSeven-accordianFour-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-5').length){
                $('#subservices-blockSeven-image-5').collapse('hide');
                $('#subservices-blockSeven-image-5').removeClass('show');
                $('#subservices-blockSeven-accordian-5').removeClass('subservices-blockSeven-accordianSix-shown subservices-blockSeven-accordian');
            }
        })
    }

    if ($('#collapseRight-5').length){
        $('#collapseRight-5').on('show.bs.collapse', function () {
            $('#subservices-blockSeven-image-5').collapse('show');
            $('#subservices-blockSeven-image-5').addClass('show');
            $('#subservices-blockSeven-accordian-5').addClass('subservices-blockSeven-accordianSix-shown subservices-blockSeven-accordian');
            if($('#subservices-blockSeven-image-0').length){
                $('#subservices-blockSeven-image-0').collapse('hide');
                $('#subservices-blockSeven-image-0').removeClass('show');
                $('#subservices-blockSeven-accordian-0').removeClass('subservices-blockSeven-accordianOne-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-1').length){
                $('#subservices-blockSeven-image-1').collapse('hide');
                $('#subservices-blockSeven-image-1').removeClass('show');
                $('#subservices-blockSeven-accordian-1').removeClass('subservices-blockSeven-accordianTwo-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-2').length){
                $('#subservices-blockSeven-image-2').collapse('hide');
                $('#subservices-blockSeven-image-2').removeClass('show');
                $('#subservices-blockSeven-accordian-2').removeClass('subservices-blockSeven-accordianThree-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-3').length){
                $('#subservices-blockSeven-image-3').collapse('hide');
                $('#subservices-blockSeven-image-3').removeClass('show');
                $('#subservices-blockSeven-accordian-3').removeClass('subservices-blockSeven-accordianFour-shown subservices-blockSeven-accordian');
            }
            if($('#subservices-blockSeven-image-4').length){
                $('#subservices-blockSeven-image-4').collapse('hide');
                $('#subservices-blockSeven-image-4').removeClass('show');
                $('#subservices-blockSeven-accordian-4').removeClass('subservices-blockSeven-accordianFive-shown subservices-blockSeven-accordian');
            }
        })
    }
}