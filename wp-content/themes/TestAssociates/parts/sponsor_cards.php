<?php

//$settings = get_field('spo_settings');
//$vars = 'container--' . $settings['bg'] . ' pad--' . $settings['pad'];

?>

<div class="container pad--all" id="cards">
    <div class="container__inner spon cols cols--centered">
        <?php
        $args = [
            'post_type' => 'product',
            'posts_per_page' => -1,
            'tax_query' => [
                [
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => 'sponsor',
                    'order' => 'asc',
                ],
            ],
        ];

        $loop = new WP_Query($args);

        if ($loop->have_posts()):
            while ($loop->have_posts()):
                $loop->the_post();
                global $product;
                ?>
                <div class="spon__card cols--4">
                    <div class="spon__inner">
                        <div class="spon__info">
                            <span class="title">
                                <h2><?php the_field('spo_title', get_the_ID()); ?></h2>
                                <?php
                                if (get_field('spo_price', get_the_ID()) == 'product'): ?>
                                    <p class="spon__price"><?php echo $product->get_price_html(); ?></p>
                                <?php else: ?>
                                    <p class="spon__price"><?php the_field('spo_customprice', get_the_ID()); ?></p>
                                <?php endif;
                                ?>
                            </span>

                            <?php the_excerpt(); ?>

                            <?php if ($product->is_type('variable')):

                                custom_variation_dropdown_add_to_cart($product);

                            else: ?>
                                <?php
                                // Simple products – standard AJAX add to cart
                                echo apply_filters(
                                    'woocommerce_loop_add_to_cart_link',
                                    sprintf(
                                        '<a href="%s" class="spon__cartbutton button product_type_%s add_to_cart_button ajax_add_to_cart" data-product_id="%s" data-product_sku="%s" aria-label="%s" rel="nofollow">%s</a>',
                                        esc_url($product->add_to_cart_url()),
                                        esc_attr($product->get_type()),
                                        esc_attr($product->get_id()),
                                        esc_attr($product->get_sku()),
                                        esc_attr($product->add_to_cart_description()),
                                        esc_html($product->add_to_cart_text())
                                    ),
                                    $product
                                );
                                ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        else:
            echo '<p>No sponsor products found.</p>';
        endif;

        wp_reset_postdata();
        ?>
    </div>
</div>