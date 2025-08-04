<?php
$settings = get_field('fwv_settings');

$vars = 'pad--' . $settings['pad'] . ' container--' . $settings['bg'];
?>

<div class="container <?php echo $vars; ?>">
    <div class="container__inner fwvid">
        <?php $youtube = get_field('fwv_id'); ?>
        <div class="fwvid__container">
            <iframe src="https://www.youtube.com/embed/<?php echo $youtube; ?>" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</div>