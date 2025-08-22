<?php
$settings = get_field('ma_settings');

$vars = 'pad--' . $settings['pad'] . ' container--' . $settings['bg'];

$bg = get_field('cardsbg', 'options');
?>
<div class="container <?php echo $vars; ?>">
    <div class="masonry__inner">
        <?php if (have_rows('ma_rows')):
            while (have_rows('ma_rows')):
                the_row();
                $layout = get_sub_field('ma_type');
                $direction = get_sub_field('ma_direction');
                $fields = get_sub_field('ma_bc');
                ?>
                <div
                    class="container__inner container__inner--narrow cols masonry masonry__<?php echo $layout; ?> masonry__<?php echo $direction; ?>">

                    <?php if ($layout == '1'):
                        $fg1 = get_sub_field('ma_fg_1');
                        $link1 = get_sub_field('ma_link_1');
                        $bg2 = get_sub_field('ma_bg_2');
                        $fg2 = get_sub_field('ma_fg_2');
                        $link2 = get_sub_field('ma_link_2');
                        $bg3 = get_sub_field('ma_bg_3');
                        $fg3 = get_sub_field('ma_fg_3');
                        $link3 = get_sub_field('ma_link_3');
                        ?>

                        <a href="<?php echo $link1['title']; ?>" class="masonry__block masonry__block--small" style="background: url(<?php echo $bg; ?>);">
                            <img src="<?php echo $fg1['url']; ?>" alt="<?php echo $fg1['alt']; ?>">
                            <?php echo $link1['title']; ?>
                        </a>
                        <a href="<?php echo $link2['title']; ?>" class="masonry__block masonry__block--small" style="background: url(<?php echo $bg; ?>);">
                            <img src="<?php echo $fg2['url']; ?>" alt="<?php echo $fg2['alt']; ?>">
                            <?php echo $link2['title']; ?>
                        </a>
                        <a href="<?php echo $link3['title']; ?>" class="masonry__block masonry__block--small" style="background: url(<?php echo $bg; ?>);">
                            <img src="<?php echo $fg3['url']; ?>" alt="<?php echo $fg3['alt']; ?>">
                            <?php echo $link3['title']; ?>
                        </a>


                    <?php elseif ($layout == '2'):
                        $fg1 = get_sub_field('ma_fg_1');
                        $link1 = get_sub_field('ma_link_1');
                        $bg2 = get_sub_field('ma_bg_2');
                        $fg2 = get_sub_field('ma_fg_2');
                        $link2 = get_sub_field('ma_link_2'); ?>

                        <a href="<?php echo $link1['title']; ?>" class="masonry__block masonry__block--medium" style="background: url(<?php echo $bg; ?>);">
                            <img src="<?php echo $fg1['url']; ?>" alt="<?php echo $fg1['alt']; ?>">
                            <?php echo $link1['title']; ?>
                        </a>
                        <a href="<?php echo $link2['title']; ?>" class="masonry__block masonry__block--small" style="background: url(<?php echo $bg; ?>);">
                            <img src="<?php echo $fg2['url']; ?>" alt="<?php echo $fg2['alt']; ?>">
                            <?php echo $link2['title']; ?>
                        </a>

                    <?php elseif ($layout == '3'):
                        $fg1 = get_sub_field('ma_fg_1');
                        $link1 = get_sub_field('ma_link_1');
                        $bg2 = get_sub_field('ma_bg_2');
                        $fg2 = get_sub_field('ma_fg_2');
                        $link2 = get_sub_field('ma_link_2');
                        $bg3 = get_sub_field('ma_bg_3');
                        $fg3 = get_sub_field('ma_fg_3');
                        $link3 = get_sub_field('ma_link_3');
                        ?>

                        <a href="<?php echo $link1['title']; ?>" class="masonry__block masonry__block--large" style="background: url(<?php echo $bg; ?>);">
                            <img src="<?php echo $fg1['url']; ?>" alt="<?php echo $fg1['alt']; ?>">
                            <?php echo $link1['title']; ?>
                        </a>

                        <span class="masonry__group">
                            <a href="<?php echo $link2['title']; ?>" class="masonry__block masonry__block--small" style="background: url(<?php echo $bg; ?>);">
                                <img src="<?php echo $fg2['url']; ?>" alt="<?php echo $fg2['alt']; ?>">
                                <?php echo $link2['title']; ?>
                            </a>
                            <a href="<?php echo $link3['title']; ?>" class="masonry__block masonry__block--small" style="background: url(<?php echo $bg; ?>);">
                                <img src="<?php echo $fg3['url']; ?>" alt="<?php echo $fg3['alt']; ?>">
                                <?php echo $link3['title']; ?>
                            </a>
                        </span>


                    <?php elseif ($layout == '4'):
                        $fg1 = get_sub_field('ma_fg_1');
                        $link1 = get_sub_field('ma_link_1');
                        $bg2 = get_sub_field('ma_bg_2');
                        $fg2 = get_sub_field('ma_fg_2');
                        $link2 = get_sub_field('ma_link_2'); ?>

                        <a href="<?php echo $link1['title']; ?>" class="masonry__block masonry__block--large" style="background: url(<?php echo $bg; ?>);">
                            <img src="<?php echo $fg1['url']; ?>" alt="<?php echo $fg1['alt']; ?>">
                            <?php echo $link1['title']; ?>
                        </a>
                        <a href="<?php echo $link2['title']; ?>" class="masonry__block masonry__block--mediumVert" style="background: url(<?php echo $bg; ?>);">
                            <img src="<?php echo $fg2['url']; ?>" alt="<?php echo $fg2['alt']; ?>">
                            <?php echo $link2['title']; ?>
                        </a>

                    <?php else: ?>
                        <p>Sorry, no blocks found</p>
                    <?php endif; ?>

                </div>
            <?php endwhile;
        else: ?>
            <p>Sorry, no rows found</p>
        <?php endif; ?>
    </div>
</div>