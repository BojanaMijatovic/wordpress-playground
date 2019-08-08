<?php
function flexsliderCSS () {
  wp_register_style( 'flexslidercss', get_stylesheet_directory_uri() . '/flexslider.css', array(), false, 'all' );
    wp_enqueue_style('flexslidercss');
}
add_action('wp_enqueue_scripts', 'flexsliderCSS');


function load_styles()
{


    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');



}

add_action('wp_enqueue_scripts', 'load_styles');


function flexsliderJS () {
  wp_register_script( 'flexslider-script',  get_stylesheet_directory_uri() . '/src/js/jquery.flexslider.js',  array(), 1, 1 );
  wp_enqueue_script('flexslider-script');
}
add_action('wp_enqueue_script', 'flexsliderJS');

function include_jquery()
{

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/src/js/jquery.min.js', array(), null, true);


}
add_action('wp_enqueue_scripts','include_jquery');


function loadjs()
{


    wp_register_script('mainjs', get_template_directory_uri() . '/js/all.js', '', 1, true);
    wp_enqueue_script('mainjs');


}
add_action('wp_enqueue_scripts', 'loadjs');





add_theme_support('menus');
add_theme_support('post-thumbnails');


register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
    'social-icons' => __('Social Icons Menu', 'theme')
  )
);


add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}





add_image_size('smallest', 300, 300, true);
add_image_size('largest', 500, 500, true);
