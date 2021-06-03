$(function () {
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 10) {
            $('.navigation-bar').addClass('navbar-active');
        } else {
            $('.navigation-bar').removeClass('navbar-active');
        }
    });
});
