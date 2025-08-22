<?php

$settings = get_field('win_settings');

$vars = 'container__' . $settings['pad'] . ' pad--' . $settings['bg'];

$i = 1;
?>

<div class="container <?php echo $vars;?>">
    <div class="container__inner win">
        <?php
        if (have_rows('win_repeater')):
            while (have_rows('win_repeater')):
                the_row();
                $img = get_sub_field('win_image');

                $award = get_sub_field('win_award');
                $winner = get_sub_field('win_winner');

                if (is_int($i / 2)):
                    $direction = ' win__reverse';
                else:
                    $direction = '';
                endif;
                ?>

                <?php if ($i == 1): ?>

                    <div class="win win__overall">
                        <div class="win__body">
                            <?php if ($award != ''): ?>
                                <h2><?php echo $award; ?></h2>
                            <?php endif; ?>
                            <p>Overall winner is...</p>
                            <?php if ($winner != ''): ?>
                                <h3><?php echo $winner; ?></h3>
                            <?php endif; ?>
                        </div>
                        <div class="win__img">
                            <?php if ($img != ''): ?>
                                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                            <?php else: ?>
                                <p>Sorry, no image uploaded</p>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php else: ?>

                    <div class="win win__category cols <?php echo $direction; ?>">
                        <div class="win__img cols--2">
                            <?php if ($img != ''): ?>
                                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                            <?php else: ?>
                                <p>Sorry, no image uploaded</p>
                            <?php endif; ?>
                        </div>
                        <div class="win__body cols--2">
                            <?php if ($award != ''): ?>
                                <h2><?php echo $award; ?></h2>
                            <?php endif; ?>
                            <p>Winner is</p>
                            <?php if ($winner != ''): ?>
                                <h3><?php echo $winner; ?></h3>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $i++; ?>
            <?php endwhile; ?>
            <?php else: ?>
            <p>Sorry, no rows found.</p>
        <?php endif; ?>
    </div>
</div>