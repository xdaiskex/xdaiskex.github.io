$(document).ready(function () {
    $('a[href^="#"]').on('click', function (page) {
        page.preventDefault();

        var target = this.hash;
        $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 70
        }, 1500, 'swing', function () {
            window.location.hash = target;
        });
    });
});