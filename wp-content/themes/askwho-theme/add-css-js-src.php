<?php
add_action('wp_enqueue_scripts', 'p_load_css_js', 11);
function p_load_css_js()
{
    $js_css_ran = rand(1000, 100000);
    /* begin register - enqueue jquery */
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/HTWF/scripts/jquery.min.js', array(), $js_css_ran, false);
    wp_enqueue_script('jquery');
    /* end register - enqueue jquery */
    // begin HTWF
    wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri() . '/assets/HTWF/scripts/bootstrap/css/bootstrap.css', array(), $js_css_ran, 'all');
    wp_enqueue_style('style_HTWF_css', get_stylesheet_directory_uri() . '/assets/HTWF/style.css', array(), $js_css_ran, 'all');
    wp_enqueue_style('skin-css', get_stylesheet_directory_uri() . '/assets/HTWF/skin.css', array(), $js_css_ran, 'all');
    wp_enqueue_style('font-awesome_css', get_stylesheet_directory_uri() . '/assets/HTWF/scripts/font-awesome/css/font-awesome.min.css', array(), $js_css_ran, 'all');
    wp_enqueue_script('HTWF-script', get_stylesheet_directory_uri() . '/assets/HTWF/scripts/script.js', array(), $js_css_ran, true);
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/HTWF/scripts/bootstrap/js/bootstrap.min.js', array(), $js_css_ran, true);
    wp_enqueue_script('smooth_scroll_min_js', get_template_directory_uri() . '/assets/HTWF/scripts/smooth.scroll.min.js', array(), $js_css_ran, true);
    wp_enqueue_script('jquery-slimscroll', get_template_directory_uri() . '/assets/HTWF/scripts/jquery.slimscroll.min.js', array(), $js_css_ran, true);
    // end HTWF
    /* begin owlcarousel */
    wp_enqueue_script('owlcarousel_js', get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.js', array(), @$js_css_ran, true);
    wp_enqueue_style('owlcarousel_css', get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.css', array(), @$js_css_ran, 'all');
    /* end owlcarousel  */
    /* begin common */
    wp_enqueue_script('owl_carousel_pro_js', get_stylesheet_directory_uri() . '/assets/js/owl-carousel-pro.js', array(), $js_css_ran, true);
    wp_enqueue_style('common_css', get_stylesheet_directory_uri() . '/assets/scss/common.css', array(), $js_css_ran, 'all');
    wp_enqueue_script('common_js', get_stylesheet_directory_uri() . '/assets/js/common.js', array(), $js_css_ran, true);
    /* end common */
}