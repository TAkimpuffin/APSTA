<?php

$settings = get_field('fwc_settings');
$vars = 'container--' . $settings['bg'] . ' pad--' . $settings['pad'];

?>

<div class="container <?php echo $vars; ?>">
    <?php if (get_field('fwc_cols') == '1'): ?>
        <div class="container__inner fwc">
            <?php if (get_field('fwc_title')): ?>
                <h2><?php the_field('fwc_title'); ?></h2>
            <?php endif; ?>
            <?php the_field('fwc_body'); ?>
        </div>

    <?php else: ?>
        <?php
        $coltype = get_field('fwc_coltype');
        $hasborder = get_field('fwc_hadborder');
        ?>

        <div class="container__inner cols fwc">
            <?php if (get_field('fwc_title')): ?>
                <h2><?php the_field('fwc_title'); ?></h2>
            <?php endif; ?>
            <div class="cols--2 fwc__content">
                <?php the_field('fwc_body'); ?>
            </div>
            <div class="cols--2 fwc__<?php echo $coltype; ?> fwc--<?php echo $hasborder; ?>">
                <?php if ($coltype == 'content'):
                    the_field('fwc_body_2');

                elseif ($coltype == 'map'): ?>
                    <iframe src="<?php the_field('fwc_map'); ?>" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                <?php elseif ($coltype == 'slider'):
                    if (have_rows('fwc_slider')): ?>
                        <div class="fwc__slider">
                            <?php while (have_rows('fwc_slider')):
                                the_row();
                                $img = get_sub_field('fwc_slider_img'); ?>
                                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="fwc__slide">
                            <?php endwhile; ?>
                        </div>
                    <?php else: ?>
                        <p>sorry, no slides found.</p>
                    <?php endif;

                elseif ($coltype == 'youtube'):
                    $youtube = get_field('fwc_youtube'); ?>
                    <iframe src="https://www.youtube.com/embed/<?php echo $youtube; ?>?si=PY5g9eWWntaMY5Yg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <?php elseif ($coltype == 'map'):
                    $map = get_field('fwc_map');
                    if ($map != ''): ?>
                        <iframe src="<?php echo $map; ?>" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else: ?>
                        <p>Map ID invalid.</p>
                    <?php endif; ?>
                    <?php
                else:
                    $img = get_field('fwc_image');
                    if ($img != ''): ?>
                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                    <?php else: ?>
                        <p>Image not found.</p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>