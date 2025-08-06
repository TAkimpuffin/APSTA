<?php get_header(); ?>

<?php
if (is_cart() || is_checkout()): ?>
    <div class="container pad--all">
        <div class="container__wooinner woocom">
            <?php the_content(); ?>
        </div>
    </div>
<?php else:
    the_content();
endif;
?>



<?php get_footer(); ?>