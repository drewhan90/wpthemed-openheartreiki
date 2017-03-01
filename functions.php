<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','gallery','link','image','quote','status','video','audio','chat'));
// load js
function openheartreiki_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('what-input', get_template_directory_uri() . '/bower_components/what-input/what-input.js', array('jquery'), '2.0.1');
        wp_enqueue_script('what-input');

        wp_register_script('foundation', get_template_directory_uri() . '/bower_components/foundation-sites/dist/foundation.js', array('jquery'), '6.2.4');
        wp_enqueue_script('foundation');

        wp_register_script('fontAwesome', 'https://use.fontawesome.com/a2ca25c584.js', array(), '1.0.0');
        wp_enqueue_script('fontAwesome');

        wp_register_script('myScript', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0');
        wp_enqueue_script('myScript');
    }
}
// Load css
function openheartreiki_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/bower_components/normalize-css/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize');

    wp_register_style('openheartreiki', get_template_directory_uri() . '/css/app.css', array(), '1.0', 'all');
    wp_enqueue_style('openheartreiki');
}

add_action('init', 'openheartreiki_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'openheartreiki_styles'); // Add Theme Stylesheet

