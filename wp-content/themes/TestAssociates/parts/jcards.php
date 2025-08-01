<?php

$settings = get_field('jc_settings');

$vars = 'container--' . $settings['bg'] . ' pad--' . $settings['pad'];

$type = get_field('jc_type');
?>

<div class="container <?php echo $vars; ?>">
    <?php

    if ($type == 'headline'): ?>
        <div class="container__inner jcCards jcCards--headline cols">


            <?php if (have_rows('jc_cards')):
                while (have_rows('jc_cards')):
                    the_row();
                    $img = get_sub_field('jc_image');
                    ?>
                    <div class="jcCards__fullimg cols--1of3">
                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                    </div>
                    <div class="jcCards__fullbody cols--2of3">
                        <h2><?php the_sub_field('jc_title'); ?></h2>
                        <h3><?php the_sub_field('jc_name'); ?></h3>
                        <p><?php the_sub_field('jc_role'); ?> at <strong><?php the_sub_field('jc_company'); ?></strong></p>
                        <?php the_sub_field('jc_bio'); ?>
                    </div>
                <?php endwhile;
            else: ?>
                <p>Sorry, no cards found</p>
            <?php endif; ?>
        </div>

    <?php else: ?>

        <div class="container__inner jcCards cols cols--center">

            <?php if (have_rows('jc_cards')):
                while (have_rows('jc_cards')):
                    the_row();
                    $img = get_sub_field('jc_image');
                    ?>
                    <div class="jcCards__card cols--3">
                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        <h3><?php the_sub_field('jc_name'); ?></h3>
                        <p><?php the_sub_field('jc_role'); ?></p>
                        <strong></p><?php the_sub_field('jc_company'); ?></p></strong>
                    </div>

                    <div class="jcCards__cardmodal">
                        <div class="jcCards__cardmodalinner">
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt'];?>" class="jcCards__cardmodalimg">
                            <div class="jcCards__cardmodalbody">
                                <h3><?php the_sub_field('jc_name'); ?></h3>
                                <p><?php the_sub_field('jc_role'); ?></p>
                                <strong></p><?php the_sub_field('jc_company'); ?></p></strong>
                                <p><?php the_sub_field('jc_bio'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            else: ?>
                <p>Sorry, no cards found</p>
            <?php endif; ?>
        </div>

    <?php endif; ?>
</div>