$(document).ready(function () {

    //=================== nav toggle ============================

    $('.nav__toggle').click(function () {
        $('.nav__toggle').toggleClass('nav__toggle--active');
        $('.nav__container').toggleClass('nav__container--active');
    });

    //================== hero cowntdown ========================

    function updateCountdown() {
        const container = $('#event-countdown');
        const dateStr = container.data('date');
        const eventDate = new Date((dateStr || '').toString().replace(/-/g, '/'));
        const now = new Date();

        const diff = Math.floor((eventDate - now) / 1000); // do seconds!

        if (diff <= 0) {
            $('#countdown-timer').hide();
            $('#thank-you-message').show();


        } else {
            const days = Math.floor(diff / (60 * 60 * 24));
            const hours = Math.floor((diff % (60 * 60 * 24)) / (60 * 60));
            const minutes = Math.floor((diff % (60 * 60)) / 60);
            const seconds = diff % 60;

            const formatted =
                `${days} <span>Days</span> ` +
                `${hours.toString().padStart(2, '0')} <span>Hours</span> ` +
                `${minutes.toString().padStart(2, '0')} <span>Minutes</span> ` +
                `${seconds.toString().padStart(2, '0')} <span>Seconds</span>`;

            $('#countdown-timer').html(formatted);
        }

    }

    updateCountdown();

    const interval = setInterval(updateCountdown, 1000);

    //=================== judge modals ======================

    $('.jcCards__card').click(function () {
        var card = $(this).next('.jcCards__cardmodal');
        $(this).toggleClass('jcCards__cardmodal--active');

        if (card.is(':visible')) {
            card.stop(true, true).slideUp();
            // content.css('display', 'none');
        } else {
            // content.css('display', 'block');
            card.stop(true, true).slideDown().css('display', 'block');
        }
    });


    $('.jcCards__cardmodal').click(function () {
        var background = $(this);

        if (background.is(':visible')) {
            background.stop(true, true).slideUp();
        } else {
        }
    });


    //=================== category modals ===============


    $('.product__card').click(function () {
        var cat = $(this).next('.product__modal');
        $(this).toggleClass('product__modal--active');

        if (cat.is(':visible')) {
            console.log('in one');
            cat.stop(true, true).slideUp();
        } else {
            console.log('in two');
            cat.stop(true, true).slideDown().css('display', 'block');
        }


        $('.product__modalclose').click(function () {
            if (cat.is(':visible')) {
                cat.stop(true, true).slideUp();
            } else {
            }
        });
    });

    //================= accordions =======================

    $('.accordion__title').click(function () {
        var accordion = $(this).next('.accordion__row');
        $(this).toggleClass('accordion__row--active');

        if (accordion.is(':visible')) {
            accordion.stop(true, true).slideUp();
            // content.css('display', 'none');
        } else {
            // content.css('display', 'block');
            accordion.stop(true, true).slideDown().css('display', 'block');
        }

    });

    //================= sliders ==========================

    $(document).ready(function () {
        $('.fwc__slider').slick({
            dots: false,
            infinite: true,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 4000,
            fade: true,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    });

});
