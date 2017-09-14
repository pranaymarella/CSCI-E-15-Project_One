$(document).ready(function() {
    if ($(window).scrollTop() > 165) {
        $('.panel').hide();
    }
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.panel').slideUp(50);
        } else {
            $('.panel').slideDown(100);
        }
    });
});
