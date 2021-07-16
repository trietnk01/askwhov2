<?php
add_action('wp_enqueue_scripts', 'p_load_css_js', 11);
function p_load_css_js()
{
    $js_css_ran = rand(1000, 100000);
    /* begin register - enqueue jquery */
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), $js_css_ran, false);
    wp_enqueue_script('jquery');
    /* end register - enqueue jquery */
    /* begin owlcarousel */
    wp_enqueue_script('owlcarousel_js', get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.js', array(), @$js_css_ran, true);
    wp_enqueue_style('owlcarousel_css', get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.css', array(), @$js_css_ran, 'all');
    /* end owlcarousel  */
    /* begin common */
    wp_enqueue_script('owl_carousel_pro_js', get_stylesheet_directory_uri() . '/assets/js/owl-carousel-pro.js', array(), $js_css_ran, true);
    wp_enqueue_style('common_css', get_stylesheet_directory_uri() . '/assets/scss/common.css', array(), $js_css_ran, 'all');
    wp_enqueue_style('common_css', get_stylesheet_directory_uri() . '/assets/scss/page_blog.css', array(), $js_css_ran, 'all');
    wp_enqueue_script('common_js', get_stylesheet_directory_uri() . '/assets/js/common.js', array(), $js_css_ran, true);
    /* end common */
}