<?php get_header(); ?>

<?php
if( have_rows('flexible_content') ):
    while ( have_rows('flexible_content') ) : the_row();
        get_template_part('parts/' . get_row_layout());
    endwhile;
endif;
?>

<?php get_footer(); ?>