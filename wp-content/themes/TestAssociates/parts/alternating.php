<?php

$settings = get_field('alt_settings');

$vars = 'container__' . $settings['pad'] . ' pad--' . $settings['bg'];

$i = 1;
?>

<div class="container">
    <div class="container__inner alt cols">
        <?php
        if (have_rows('alt_repeater')):
            while (have_rows('alt_repeater')):
                the_row();
                $img = get_sub_field('alt_img');

                $award = get_sub_field('alt_award');
                $winner = get_sub_field('alt_winner');

                if (is_int($i / 2)):
                    $direction = ' alt--reverse';
                else:
                    $direction = '';
                endif;
                ?>

                <div class="alt cols--2 <?php echo $direction; ?>">
                    <div class="alt__img">
                        <?php if ($img != ''): ?>
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        <?php else: ?>
                            <p>Sorry, no image uploaded</p>
                        <?php endif; ?>
                    </div>
                    <div class="alt__body">
                        <?php if ($award != ''): ?>
                            <h2><?php echo $award; ?></h2>
                        <?php endif; ?>
                        <p>Winner is</p>
                        <?php if ($winner != ''): ?>
                            <h3><?php echo $winner; ?></h3>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endwhile; ?>
            <p>Sorry, no rows found.</p>
        <?php endif; ?>
    </div>
</div>