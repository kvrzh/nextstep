/**
 * Created by Anton on 07.09.2016.
 */

$(document).ready(function () {


    $('.popup, .popup-cont')
        .fadeIn(1000);
    $('.popup,#popup-close').click(function () {
        $('.popup,.popup-cont')
            .fadeOut(500);
    });

    var i = $('.firstsect p').outerHeight(true);
    var j = $('.secondsect p').outerHeight(true);
    $('.firstsect i').css('line-height', i + 'px');
    $('.secondsect i').css('line-height', j + 'px');
});