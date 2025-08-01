<?php
$settings = get_field('he_settings');

$bg = get_field('he_bg');

$event_date = get_field('he_date');
?>

<div class="container pad--<?php echo $settings['pad']; ?> hero__wrapper" style="background: url('<?php echo $bg; ?>');">
    <div class="container__inner hero">
        <div class="hero__counter" id="event-countdown" data-date="<?php echo esc_attr($event_date); ?>">
            <h2><i class="fa-regular fa-calendar-days"></i><?php the_field('he_date') ?> <span></span> <i class="fa-solid fa-location-dot"></i><?php the_field('he_location'); ?></h2>
            <span class="hero__timer" id="countdown-timer">Loading countdown...</span>
            <span class="hero__thankyou" id="thank-you-message" style="display: none;">Thank you for attending!</span>
        </div>
    </div>
    <div class="container__inner cols hero__buttons">
        
    </div>
</div>