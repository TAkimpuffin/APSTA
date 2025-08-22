<?php

$settings = get_field('fin_settings');

$vars = 'container--' . $settings['bg'] . ' pad--' . $settings['pad'];
$bg = get_field('finalist_bg', 'options');
?>

<div class="container <?php echo $vars;?>">
    <div class="container__inner fin cols cols--center">
        <?php

        if (have_rows('fin_repeater')):
            while (have_rows('fin_repeater')):
                the_row();
                $title = get_sub_field('fin_title');
                ?>
                <div class="fin__card cols--3">
                    <div class="fin__cardinner">
                        <div class="fin__cardfront" style="background: url('<?php echo $bg; ?>');">
                            <?php if ($title != ''): ?>
                                <h2><?php echo $title; ?></h2>
                            <?php endif; ?>
                        </div>
                        <div class="fin__cardback" style="background: url('<?php echo $bg; ?>');">
                            <?php the_sub_field('fin_body'); ?>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php else: ?>
            <p>Sorry, no finalists found.</p>
        <?php endif; ?>
    </div>
</div>