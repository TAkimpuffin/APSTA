<?php

ini_set( 'upload_max_size' , '256M' );
ini_set( 'post_max_size', '256M');
ini_set( 'max_execution_time', '300' );
ini_set( 'mysql.trace_mode', 0 );

add_theme_support( 'menus' );
register_nav_menus( array(
    'primary'   => 'Display this menu in header',
    'footerleft'   => 'The left side footer menu',
    'footerright'   => 'The right site footer menu',
) );

require_once(get_theme_file_path().'/parts/parts.php');


function block_style_enqueue() {
    wp_enqueue_style(
        'my-block-editor-styles',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        filemtime(get_template_directory() . '/assets/css/style.css')
    );
}
add_action('enqueue_block_editor_assets', 'block_style_enqueue');

add_action('admin_head', 'admin_styles');
function admin_styles() {
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

?>