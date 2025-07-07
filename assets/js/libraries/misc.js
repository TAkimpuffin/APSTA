$(document).ready(function () {

    $('.header__toggle').click(function () {
        $('.header__toggle').toggleClass('header__toggle--active');
        $('.header__nav').toggleClass('header__nav--active');
        $('.header__menu--mob').toggleClass('header__menu--mobactive');
    });

});