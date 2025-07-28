<?php  

$settings = get_field('ttl_settings'); 

$vars = 'container--' . $settings['bg'] . ' pad--' . $settings['pad'];

if (get_field('ttl_img')) :
$bg = get_field('ttl_img');
else :
    $bg = '';
endif;
?>

<div class="container <?php echo $vars;?> title__wrapper" style="background: url('<?php echo $bg['url']; ?>');">
    <div class="container__inner title title--<?php echo $settings['bg'];?>">
        <?php if (get_field('ttl_title')): ?>
            <h1><?php the_field('ttl_title'); ?></h1>
        <?php else : ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>
    </div>
</div>
