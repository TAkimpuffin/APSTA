<?php /* Template Name: Landing Page */ ?>

<?php

$america = get_field('lnd_america');
$americaBg = $america['bg'];

$europe = get_field('lnd_europe');
$europeBg = $europe['bg'];

$asia = get_field('lnd_asia');
$asiaBg = $asia['bg'];

?>

<?php get_header('landing'); ?>

<div class="container container--white cols">
    <div class="landing landing--america cols--3" style="background: url(<?php echo $americaBg; ?>);">
        <a href="<?php echo $america['link']; ?>">
        </a>
    </div>
    <div class="landing landing--europe cols--3" style="background: url(<?php echo $europeBg; ?>);">
        <a href="<?php echo $europe['link']; ?>"></a>
    </div>
    <div class="landing landing--asia cols--3" style="background: url(<?php echo $asiaBg; ?>);">
        <a href="<?php echo $asia['link']; ?>"></a>
    </div>
</div>

<?php get_footer('landing'); ?>