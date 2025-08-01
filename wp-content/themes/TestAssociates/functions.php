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
// function block_style_enqueue()
// {
//     wp_enqueue_style(
//         'my-block-editor-styles',
//         get_template_directory_uri() . '/assets/css/style.css',
//         [],
//         filemtime(get_template_directory() . '/assets/css/style.css')
//     );
// }
// add_action('enqueue_block_editor_assets', 'block_style_enqueue');


function block_editor_assets_enqueue() {
    // Enqueue editor JS
    // wp_enqueue_script(
    //     'my-block-editor-script',
    //     get_template_directory_uri() . '/assets/js/main.js',
    //     ['wp-blocks', 'wp-element', 'wp-editor'], // dependencies
    //     filemtime(get_template_directory() . '/assets/js/main.js'),
    //     true // load in footer
    // );

    // Optional: enqueue your existing editor CSS
    
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

// function unsetGutenbergEditorStyles() {

//     add_filter('block_editor_settings', function ($editor_settings) {
//               unset($editor_settings['styles'][0]);
//               return $editor_settings;
//           }
// );

// }
// add_action( 'admin_init', 'unsetGutenbergEditorStyles' );


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

?>