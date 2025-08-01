<?php

$settings = get_field('ti_settings');

$vars = 'container--' . $settings['bg'] . ' pad--' . $settings['pad'];

$i = '1';

?>

<div class="container <?php echo $vars; ?>">
    <div class="container__inner timeline">
        <?php if (have_rows('ti_repeater')): ?>
            <span class="timeline__topper"></span>
            <?php while (have_rows('ti_repeater')):
                the_row();
                ?>
                <?php if (is_int($i / 2)): ?>
                    <div class="timeline__item">
                        <p class="timeline__event"><?php the_sub_field('ti_event'); ?></p>
                        <span></span>
                        <p class="timeline__time"><?php the_sub_field('ti_time'); ?></p>
                    </div>
                <?php else: ?>
                    <div class="timeline__item timeline__item--reverse">
                        <p class="timeline__event"><?php the_sub_field('ti_event'); ?></p>
                        <span></span>
                        <p class="timeline__time"><?php the_sub_field('ti_time'); ?></p>
                    </div>
                <?php endif; ?>

                <?php $i++; ?>
            <?php endwhile; ?>
            <span class="timeline__footer"></span>
        <?php else: ?>
            <p>Sorry, no events set.</p>
        <?php endif; ?>
    </div>
</div>