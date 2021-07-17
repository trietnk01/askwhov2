<?php
add_theme_support('post-thumbnails');
/* begin convert to datetime */
function datetimeConverterByFormat($date, $format = "d/m/Y H:i:s")
{
    $result = "";
    if (!empty($date) && $date != '0000-00-00 00:00:00' && $date != '0000-00-00') {
        $arrDate = date_parse_from_format('Y-m-d H:i:s', $date);
        $ts = mktime($arrDate["hour"], $arrDate["minute"], $arrDate["second"], $arrDate['month'], $arrDate['day'], $arrDate['year']);
        $result = date($format, $ts);
    }
    return $result;
}
/* end convert to datetime */
/* begin add css to admin */
add_action('admin_enqueue_scripts', 'add_css_file_admin');
function add_css_file_admin()
{
    $js_css_ran = rand(1000, 100000);
    wp_enqueue_style('common_css', get_stylesheet_directory_uri() . '/assets/scss/common_admin.css', array(), $js_css_ran, 'all');
}
/* end add css to admin */
/* begin remove resize function image */
function remove_image_sizes($sizes, $metadata)
{
    return [];
}
/* end remove resize function image */
/* begin add session */
add_action('init', 'zendvn_sp_session_start', 1);
function zendvn_sp_session_start()
{
    if (!session_id()) {
        session_start();
    }
}
/* end add session  */
/* begin add ajaxurl */
add_action('wp_head', 'myplugin_ajaxurl');
function myplugin_ajaxurl()
{
    $ajax_nonce = wp_create_nonce('ajax-security-code');
    $html = '<script type="text/javascript">';
    $html .= ' var ajaxurl = "' . admin_url('admin-ajax.php') . '"; ';
    $html .= ' var security_code = "' . $ajax_nonce . '"; ';
    $html .= '</script>';
    echo $html;
}
/* end add ajaxurl */
/* begin update post count view */
function addOrUpdatePostCountView($post_id)
{
    $meta_key = 'post_views_count';
    $count_views = get_post_meta($post_id, $meta_key, true);
    if (empty($count_views)) {
        $count_views = 1;
        add_post_meta($post_id, $meta_key, $count_views, false);
    } else {
        $count_views++;
        update_post_meta($post_id, $meta_key, $count_views, '');
    }
}
/* end update post count view */