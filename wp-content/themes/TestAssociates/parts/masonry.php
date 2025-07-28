<?php 
$settings = get_field('ma_settings');

$vars = 'pad--' . $settings['pad'] . ' container--' . $settings['bg'];
?>

<div class="container <?php echo $vars;?>">
    <div class="container__inner masonry">

    </div>
</div>