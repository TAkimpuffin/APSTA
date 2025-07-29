$(document).ready(function () {

    $('.nav__toggle').click(function () {
        $('.nav__toggle').toggleClass('nav__toggle--active');
        $('.nav__container').toggleClass('nav__container--active');
    });

    function updateCountdown() {
        const container = $('#event-countdown');
        const dateStr = container.data('date');
        const eventDate = new Date(dateStr.replace(/-/g, '/')); // force format just in case
        const now = new Date();

        const diff = Math.floor((eventDate - now) / 1000); // do seconds!

        if (diff <= 0) {
            $('#countdown-timer').hide();
            $('#thank-you-message').show();
            clearInterval(interval);
            return;
        }

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

    updateCountdown();

    const interval = setInterval(updateCountdown, 1000);

});
