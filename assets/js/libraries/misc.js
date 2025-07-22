$(document).ready(function () {

    $('.nav__toggle').click(function () {
        $('.nav__toggle').toggleClass('nav__toggle--active');
        $('.nav__container').toggleClass('nav__container--active');
        // $('.nav').toggleClass('nav--mobactive');
    });

});