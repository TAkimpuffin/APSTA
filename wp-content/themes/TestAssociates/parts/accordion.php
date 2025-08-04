<?php

$settings = get_field('acc_settings');
$vars = 'container--' . $settings['bg'] . ' pad--' . $settings['pad'];
$type = get_field('acc_type');

?>

<div class="container <?php echo $vars; ?>">
    <div class="container__inner accordions">
        <?php if ($type == 'single'): ?>
            <?php if (have_rows('accordions')): ?>
                <?php while (have_rows('accordions')):
                    the_row(); ?>
                    <div class="accordion">
                        <div class="accordion__title">
                            <h3><?php the_sub_field('acc_title'); ?></h3>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="accordion__body accordion__row">
                            <?php the_sub_field('acc_body'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Sorry, no accordions found.</p>
            <?php endif; ?>

        <?php elseif ($type == 'cards'): ?>
            <?php if (have_rows('accordions')): ?>
                <?php while (have_rows('accordions')):
                    the_row(); ?>
                    <div class="accordion__title">
                        <h3><?php the_sub_field('acc_title'); ?></h3>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <?php if (have_rows('acc_cards')): ?>
                        <div class="accordion accordion__row cols">
                            <?php while (have_rows('acc_cards')):
                                the_row(); ?>
                                <div class="accordion__card">
                                    <?php the_sub_field('acc_card_title'); ?>
                                    <?php the_sub_field('acc_card_body'); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else: ?>
                        <p>Sorry, no cards found.</p>
                    <?php endif; ?>

                <?php endwhile; ?>
            <?php else: ?>
                <p>Sorry, no card groups found.</p>
            <?php endif; ?>
        <?php else: ?>
            <p>Ooops! somthing has gone wrong with you accordion.</p>

        <?php endif; ?>
    </div>
</div>