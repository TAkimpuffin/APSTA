<?php 
$settings = get_field('cta_settings');

$vars = 'pad--' . $settings['pad'] . ' container--' . $settings['bg'];
?>

<div class="contianer <?php echo $vars; ?>">
    <div class="container__inner cta">
        <?php the_field('cta_text'); ?>
    </div>
</div>