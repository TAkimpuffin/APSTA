<?php
add_action('acf/init', 'flex_acf_init_block_types');

function flex_acf_init_block_types()
{
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name' => 'masonry',
            'title' => __('Masonry Block'),
            'description' => __('Masonry section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => ['masonry'],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/masonry.php'
        ));

        acf_register_block_type(array(
            'name' => 'cta',
            'title' => __('CTA Block'),
            'description' => __('CTA section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => ['cta'],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/cta.php'
        ));

        acf_register_block_type(array(
            'name' => 'title',
            'title' => __('Title Block'),
            'description' => __('Title section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => ['title'],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/title.php',
        ));

        acf_register_block_type(array(
            'name' => 'Full Width Content',
            'title' => __('Full Width Content Block'),
            'description' => __('Full Width Content section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => ['fwc', 'content', 'full width'],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/fw.php',
        ));

        acf_register_block_type(array(
            'name' => 'Contact',
            'title' => __('Contact Block'),
            'description' => __('Contact section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => ['form', 'content', 'contact'],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/contact.php',
        ));

        acf_register_block_type(array(
            'name' => 'Full Width Image',
            'title' => __('Full Width Image Block'),
            'description' => __('Full Width Image section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => ['image', 'content', 'full width'],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/fw_img.php',
        ));

        acf_register_block_type(array(
            'name' => 'Full Width Video',
            'title' => __('Full Width Video Block'),
            'description' => __('Full Width Video section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => ['video', 'content', 'video'],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/fw_video.php',
        ));

        acf_register_block_type(array(
            'name' => 'Judging Cards',
            'title' => __('Judging Cards Block'),
            'description' => __('Judging Cards section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => ['cards', 'content', 'judges'],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/jcards.php',
        ));

        acf_register_block_type(array(
            'name' => 'Timeline',
            'title' => __('Timeline Block'),
            'description' => __('Timeline section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => ['timeline', 'content'],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/timeline.php',
        ));

        acf_register_block_type(array(
            'name' => 'Hero',
            'title' => __('Hero Block'),
            'description' => __('Hero section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => ['hero', 'content'],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/hero.php',
        ));

        acf_register_block_type(array(
            'name' => 'Spacer',
            'title' => __('Spacer Block'),
            'description' => __('Spacer section.'),
            'category' => 'star-filled',
            'icon' => 'welcome-widgets-menus',
            'keywords' => ['spacer', 'content', 'gap'],
            'supports' => [
                'align' => true,
                'mode' => true,
                'jsx' => true
            ],
            'render_template' => 'parts/spacer.php',
        ));

    }
}
