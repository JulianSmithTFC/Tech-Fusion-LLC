$('#ss-blockEight-one').on('show.bs.collapse', function() {

    $('#ss-blockEight-btnOne').removeClass('subservices-blockEight-btn-normal subservices-blockEight-btn-active');
    $('#ss-blockEight-btnTwo').removeClass('subservices-blockEight-btn-normal subservices-blockEight-btn-active');
    $('#ss-blockEight-btnThree').removeClass('subservices-blockEight-btn-normal subservices-blockEight-btn-active');

    $('#ss-blockEight-btnOne').addClass('subservices-blockEight-btn-active');
    $('#ss-blockEight-btnTwo').addClass('subservices-blockEight-btn-normal');
    $('#ss-blockEight-btnThree').addClass('subservices-blockEight-btn-normal');

    $('#ss-blockEight-two').collapse('hide');
    $('#ss-blockEight-three').collapse('hide');
});

$('#ss-blockEight-two').on('show.bs.collapse', function() {

    $('#ss-blockEight-btnOne').removeClass('subservices-blockEight-btn-normal subservices-blockEight-btn-active');
    $('#ss-blockEight-btnTwo').removeClass('subservices-blockEight-btn-normal subservices-blockEight-btn-active');
    $('#ss-blockEight-btnThree').removeClass('subservices-blockEight-btn-normal subservices-blockEight-btn-active');

    $('#ss-blockEight-btnTwo').addClass('subservices-blockEight-btn-active');
    $('#ss-blockEight-btnOne').addClass('subservices-blockEight-btn-normal');
    $('#ss-blockEight-btnThree').addClass('subservices-blockEight-btn-normal');

    $('#ss-blockEight-one').collapse('hide');
    $('#ss-blockEight-three').collapse('hide');
});

$('#ss-blockEight-three').on('show.bs.collapse', function() {

    $('#ss-blockEight-btnOne').removeClass('subservices-blockEight-btn-normal subservices-blockEight-btn-active');
    $('#ss-blockEight-btnTwo').removeClass('subservices-blockEight-btn-normal subservices-blockEight-btn-active');
    $('#ss-blockEight-btnThree').removeClass('subservices-blockEight-btn-normal subservices-blockEight-btn-active');

    $('#ss-blockEight-btnThree').addClass('subservices-blockEight-btn-active');
    $('#ss-blockEight-btnOne').addClass('subservices-blockEight-btn-normal');
    $('#ss-blockEight-btnTwo').addClass('subservices-blockEight-btn-normal');

    $('#ss-blockEight-one').collapse('hide');
    $('#ss-blockEight-two').collapse('hide');
});