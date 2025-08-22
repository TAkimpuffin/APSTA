<?php
$settings = get_field('spotab_settings');
$vars = 'container--' . $settings['bg'] . ' pad--' . $settings['pad'];
$id = $settings['id'];
$goto = get_field('spotab_showbutton');
$goup = get_field('spotab_goupbutton');

$i = 1;
$x = 1;
?>

<div class="container <?php echo $vars; ?>">

<?php if ( $goto != ''): ?>
    <div class="container__inner spotab__button spotab__down">
        <h2>See all benefits!</h2>
        <span class="pulse">
            <a href="#<?php echo esc_attr($id); ?>">
                <i class="fa-solid fa-chevron-down"></i>
            </a>
        </span>
    </div>
<?php endif; ?>

    <div class="container__inner spotab spotab__accordion" id="<?php echo esc_attr($id); ?>">
        <h2><?php the_field('spo_tab_section'); ?></h2>
        <div class="spotab__rows spotab__rows--headers cols">
            <?php if (have_rows('spo_tab_head')): ?>
                <div class="cols--1of3">
                </div>
                <div class="spotab__row--header cols cols--2of3">
                    <?php while (have_rows('spo_tab_head')):
                        the_row(); ?>
                        <div class="spotab__cel spotab__cel--header">
                            <p><?php the_sub_field('spo_tab_header'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p>Sorry, no headers found</p>
            <?php endif; ?>
        </div>

        <?php if (have_rows('spo_tab_prerows')): ?>
            <div class="spotab__rows spotab__inner">
                <?php while (have_rows('spo_tab_prerows')):
                    the_row(); ?>
                    <div class="spotab__row cols">
                        <div class="cols--1of3">
                        <h3><?php the_sub_field('spo_tab_feature'); ?></h3>
                        </div>

                        <?php if (have_rows('spo_tab_columns')): ?>
                            <div class="spotab__items cols cols--2of3">
                                <?php while (have_rows('spo_tab_columns')):
                                    the_row(); ?>

                                    <?php
                                    $type = get_sub_field('spo_tab_celtype'); 
                                    if (is_int($x / 2)) :
                                        $bg = '';
                                    else: 
                                        $bg = 'spotab__cel--dark';
                                    endif;
                                    ?>

                                    <div class="spotab__cel <?php echo $bg;?>">
                                        <?php if ($type === 'true'): ?>
                                            <i class="fa-solid fa-check"></i>
                                        <?php elseif ($type === 'false'): ?>
                                            <i class="fa-solid fa-xmark"></i>
                                        <?php else: ?>
                                            <p><?php the_sub_field('spo_tab_cel'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <?php $x++; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <?php $i++; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

<?php if ( $goup != ''): ?>
    <div class="container__inner spotab__button spotab__up">
        <h2>Make a purchase</h2>
        <span class="pulse">
            <a href="#cards">
                <i class="fa-solid fa-chevron-up"></i>
            </a>
        </span>
    </div>
<?php endif; ?>    
</div>