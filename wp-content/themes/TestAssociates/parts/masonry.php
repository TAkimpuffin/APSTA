<?php
$settings = get_field('ma_settings');

$vars = 'pad--' . $settings['pad'] . ' container--' . $settings['bg'];
?>

<!-- <div class="container">
    <?php $rows = get_field('ma_rows'); // get all the rows ?>

    <div class="container__inner">
        <pre>
        <?php // print_r($rows); ?>
        </pre>
    </div>
</div> -->
<div class="container <?php echo $vars; ?>">

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
                    while (have_rows('layout_1')):
                        the_row();
                        $blocks = get_sub_field('ma_bc');
                        // $fg = get_sub_field('ma_bc')['mc_fg'];
                        // $link = get_sub_field('ma_bc')['mc_link'];
                        // $body = get_sub_field('ma_bc')['mc_text'];
                        ?>

                        <a href="" class="masonry__block"></a>

                    <?php endwhile;

                elseif ($layout == '2'):
                    while (have_rows('layout_2')):
                        the_row(); ?>
                        <div class="masonry__block">
                        </div>
                    <?php endwhile;

                elseif ($layout == '3'):
                    while (have_rows('layout_3')):
                        the_row(); ?>
                        <div class="masonry__block">
                        </div>
                    <?php endwhile;
                else: ?>
                    <p>Sorry, no blocks found.</p>
                <?php endif; ?>

            </div>
        <?php endwhile;
    else: ?>
        <p>Sorry, no rows found</p>
    <?php endif; ?>
</div>