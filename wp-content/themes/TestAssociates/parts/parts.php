<?php
add_action('acf/init', 'flex_acf_init_block_types');
 
function flex_acf_init_block_types() {
    if( function_exists('acf_register_block_type') ) {
 
        acf_register_block_type(array(
            'name' => 'hero',
            'title' => __('Hero Block'),
            'description' => __('Hero section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => [ 'hero' ],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/hero.php'
        ));
 
    }
}
 