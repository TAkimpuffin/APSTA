<?php

$settings = get_field('jc_settings');

$vars = 'container--' . $settings['bg'] . ' pad--' . $settings['pad'];

?>

<div class="container <?php echo $vars; ?>">
    <div class="container__inner jc__cards">
        <?php
        if (have_rows('js_cards')):
            while (have_rows('js_cards')):
                the_row();
                $type = get_sub_field(selector: 'sub_field');
                $img = get_sub_field(selector: 'sub_field');
                ?>
                <div class="jc__card jc__card--<?php echo $type; ?>">
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                    <h3><?php the_field('jc_name'); ?></h3>
                    <p><?php the_field('jc_role'); ?></p>
                    <p><strong><?php the_field('jc_company'); ?></strong></p>
                </div>
                <div class="jc__modal cols">
                    <div class="jc__modal--img">
                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                    </div>
                    <div class="jc__modal--body">
                        <h3><?php the_field('jc_name'); ?></h3>
                        <p><?php the_field('jc_role'); ?></p>
                        <p><strong><?php the_field('jc_company'); ?></strong></p>
                        <span><p>Bio:</p></span>
                        <?php the_field('jc_bio'); ?>
                    </div>
                </div>
            <?php endwhile;
        else: ?>
            <p>Sorry, no cards found</p>
        <?php endif;
        ?>
    </div>
</div>