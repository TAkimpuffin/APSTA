<?php

$settings = get_field('fwi_settings');

$vars = 'container--' . $settings['bg'] . ' pad--' . $settings['pad'];

$img = get_field('fwi_img');

?>

<div class="container">
    <div class="container__inner fwimg">
<?php if ($img != '') : ?>
    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
<?php else : ?>
    <p>Image has not been uploaded</p>
<?php endif; ?>
    </div>
</div>