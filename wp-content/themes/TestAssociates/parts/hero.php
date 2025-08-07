<?php
$settings = get_field('he_settings');
$bg = get_field('he_bg');

$current_date = date('Y-m-d H:i:s');
$event_date = get_field('he_date');
$pretty_date = formatDateWithSuffix($event_date);
?>

<div class="container pad--<?php echo $settings['pad']; ?> hero__wrapper"
    style="background: url('<?php echo $bg; ?>');">
    <div class="container__inner hero">
        <div class="hero__counter" id="event-countdown" data-date="<?php echo esc_attr($event_date); ?>">
            <div class="hero__info">
                <h2><i class="fa-regular fa-calendar-days" aria-hidden="true"></i><?php echo $pretty_date ?></h2>
                    <span></span>
                <h2><i class="fa-solid fa-location-dot"></i><?php the_field('he_location'); ?></h2>
            </div>

            <span class="hero__timer" id="countdown-timer">Loading countdown...</span>


            <span class="hero__thankyou" id="thank-you-message" style="display: none;">Thank you for attending!</span>
        </div>
    </div>
    <div class="container__inner cols hero__buttons">
        <?php

        if ($current_date < $event_date):
            if (have_rows('he_prebuttons')):
                while (have_rows('he_prebuttons')):
                    the_row();
                    $link = get_sub_field('he_button');
                    ?>
                    <a href="<?php echo $link['url']; ?>" class="btn btn--black"><?php echo $link['title']; ?></a>
                <?php endwhile;
            endif;

        else:
            echo 'in two';
            if (have_rows('he_postbuttons')):
                while (have_rows('he_postbuttons')):
                    the_row();
                    $link = get_sub_field('he_button');
                    ?>
                    <a href="<?php echo $link['url']; ?>" class="btn btn--black"><?php echo $link['title']; ?></a>
                <?php endwhile;
            endif;

        endif;
        ?>
    </div>
</div>