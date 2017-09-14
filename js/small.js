$(document).ready(function() {
    if ($(window).scrollTop() > 165) {
        $('.panel').css('visibility', 'hidden');
    }
    $(window).scroll(function() {
        if ($(this).scrollTop() > 10) {
            $('.panel').css('visibility', 'hidden');
        } else {
            $('.panel').css('visibility', 'visible');
        }
    });
});
