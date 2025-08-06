<?php

$settings = get_field('wcl_settings');

$vars = 'container--' . $settings['bg'] . ' pad--' . $settings['pad'];

?>

<div class="container <?php echo $vars; ?>">
    <div class="container__inner wcl__filters">
        <?php
        // Get selected categories from query string
        $selected_categories = isset($_GET['category']) ? array_map('sanitize_text_field', $_GET['category']) : [];

        // Get only product categories that are used by products
        $product_categories = get_terms([
            'taxonomy' => 'product_cat',
            'hide_empty' => true, // Only categories that have products
        ]);

        if (!empty($product_categories) && !is_wp_error($product_categories)): ?>
            <form method="get" action="">
                <div class="wcl__filter">
                    <p>FILTER BY:</p>
                    <?php foreach ($product_categories as $category):
                        $is_checked = in_array($category->slug, $selected_categories);
                        $checked = $is_checked ? 'checked' : '';
                        $label_class = $is_checked ? 'wcl__label selected' : 'wcl__label';
                        ?>
                        <label class="<?php echo $label_class . ' wcl__label--' . esc_attr($category->slug);?>">
                            <input onChange="this.form.submit()" type="checkbox" name="category[]"
                                value="<?php echo esc_attr($category->slug); ?>" <?php echo $checked; ?>>
                            <span><?php echo esc_html($category->name); ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>
            </form>
        <?php endif; ?>

    </div>
</div>




<div class="container__inner wcl">

    <ul class="wcl__products cols cols--around">
        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        );

        // If categories are selected, filter by them
        if (!empty($selected_categories)) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => $selected_categories,
                ),
            );
        }
        $loop = new WP_Query($args);
        if ($loop->have_posts()) {
            while ($loop->have_posts()):
                $loop->the_post();
                wc_get_template_part('content', 'product');
            endwhile;
        } else {
            echo __('No products found');
        }
        wp_reset_postdata();
        ?>
    </ul>

</div>
</div>