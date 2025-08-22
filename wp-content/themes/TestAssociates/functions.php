<?php

// fix wp upload size restrictions

ini_set('upload_max_size', '256M');
ini_set('post_max_size', '256M');
ini_set('max_execution_time', '300');
ini_set('mysql.trace_mode', 0);


// register menus
add_theme_support('menus');
register_nav_menus(array(
    'primary' => 'Display this menu in header',
    'footerleft' => 'The left side footer menu',
    'footerright' => 'The right site footer menu',
));

// necessary to use acf block editor stuff
require_once(get_theme_file_path() . '/parts/parts.php');

function block_editor_assets_enqueue()
{
    wp_enqueue_style(
        'my-block-editor-styles',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        filemtime(get_template_directory() . '/assets/css/style.css')
    );
}
add_action('enqueue_block_editor_assets', 'block_editor_assets_enqueue');


// quality of life style change for guttenburg backend 
add_action('admin_head', 'admin_styles');
function admin_styles()
{
    echo '<style>
            .wp-block {max-width: 1280px;}
            .interface-interface-skeleton__sidebar {max-width: 500px; width: 100%;}
            .interface-complementary-area__fill {max-width: 500px; width: 100% !important;}
            .editor-sidebar {max-width: 500px; width: 100% !important;}
            </style>';
}


// redirect for countried that can't use paypal
add_action('template_redirect', 'redirect_indian_visitors_to_invoice');

function redirect_indian_visitors_to_invoice()
{
    // Don't redirect in admin or if already on the invoice request page
    if (is_admin() || is_page('invoice-request')) {
        return;
    }

    // List of pages to block access to for Indian visitors
    $restricted_pages = [
        'shop',
        'cart',
        'checkout',
        'book-a-table'
    ];

    // Check if the current page matches any restricted page
    foreach ($restricted_pages as $slug) {
        if (is_page($slug) || ($slug === 'shop' && is_shop()) || ($slug === 'cart' && is_cart()) || ($slug === 'checkout' && is_checkout())) {
            // Geolocate user
            $location = WC_Geolocation::geolocate_ip();
            $country = isset($location['country']) ? $location['country'] : '';

            if ($country === 'IN') {
                wp_redirect(site_url('/request-invoice'));
                exit;
            }
        }
    }
}

function redirect_indian_visitors_to_cat_invoice()
{
    // Don't redirect in admin or if already on the invoice request page
    if (is_admin() || is_page('category-sponsorship')) {
        return;
    }

    // List of pages to block access to for Indian visitors
    $restricted_pages = [
        'category-sponsorship'
    ];

    // Check if the current page matches any restricted page
    foreach ($restricted_pages as $slug) {
        if (is_page($slug) || ($slug === 'shop' && is_shop()) || ($slug === 'cart' && is_cart()) || ($slug === 'checkout' && is_checkout())) {
            // Geolocate user
            $location = WC_Geolocation::geolocate_ip();
            $country = isset($location['country']) ? $location['country'] : '';

            if ($country === 'IN') {
                wp_redirect(site_url('/categories-invoice'));
                exit;
            }
        }
    }
}

// Date formatter function for hero

function formatDateWithSuffix($dateString)
{
    $date = new DateTime($dateString);
    $day = (int) $date->format('j');

    // Determine ordinal suffix
    if ($day % 10 == 1 && $day != 11) {
        $suffix = 'st';
    } elseif ($day % 10 == 2 && $day != 12) {
        $suffix = 'nd';
    } elseif ($day % 10 == 3 && $day != 13) {
        $suffix = 'rd';
    } else {
        $suffix = 'th';
    }

    // Format final date string
    return $day . $suffix . ' ' . $date->format('F Y');
}

// adding variable product cart button for woocom, why is this not already a feature? hateful plugin.

function custom_variation_dropdown_add_to_cart($product) {
    if (!$product || !$product->is_type('variable')) {
        return;
    }

    $available_variations = $product->get_available_variations();

    if (empty($available_variations)) {
        echo '<p>This product has no available variations.</p>';
        return;
    }

    ?>

    <form class="custom-variation-form" method="post" action="<?php echo esc_url(wc_get_cart_url()); ?>">
        <select class="spon__variable" name="variation_id" required>
            <option value="">Choose a category</option>
            <?php foreach ($available_variations as $variation) :
                $variation_obj = wc_get_product($variation['variation_id']);
                if (!$variation_obj->is_purchasable() || !$variation_obj->is_in_stock()) continue;

                $variation_name = implode(' / ', array_map('ucwords', $variation['attributes']));
                ?>
                <option value="<?php echo esc_attr($variation['variation_id']); ?>">
                    <?php echo esc_html($variation_name); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" />
        <button type="submit" class="spon__cartbutton button alt">Add to cart</button>
    </form>

    <style>
        .custom-variation-form {
            margin-top: 10px;
        }
        .custom-variation-form select {
            width: 100%;
            padding: 8px;
        }
    </style>

<?php } ?>