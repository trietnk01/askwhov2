<?php
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