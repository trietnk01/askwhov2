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
/* begin plus articles more */
add_action('wp_ajax_plus_articles_more', 'plus_articles_more');
add_action('wp_ajax_nopriv_plus_articles_more', 'plus_articles_more');
function plus_articles_more()
{
    $offset = 0;
    $per_item_rendered = 4;
    $main_item_rendered = 0;
    $xhtml = '';
    $hideLoadmore = false;
    if (isset($_POST['offset'])) {
        $offset = intval($_POST['offset']);
    }
    $args_no_limit = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => 'blog',
            ),
        ),
    );
    $the_query_no_limit = new WP_Query($args_no_limit);
    $remaining_items = intval($the_query_no_limit->found_posts) - intval($offset);
    if (intval($remaining_items) <= intval($per_item_rendered)) {
        $main_item_rendered = intval($remaining_items);
        $hideLoadmore = true;
    } else {
        $main_item_rendered = intval($per_item_rendered);
    }
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => intval($main_item_rendered),
        'offset' => intval($offset),
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => 'blog',
            ),
        ),
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $featured_image = '';
            if (!empty(get_the_post_thumbnail_url(get_the_ID(), 'full'))) {
                $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            } else {
                $featured_image = get_stylesheet_directory_uri() . "/assets/images/no-image.png";
            }
            $date = get_the_date('Y-m-d');
            $date_vn = datetimeConverterByFormat($date, "d.m.Y");
            $xhtml .= '<div class="item">
            <a href="' . get_the_permalink() . '" class="author_image">
                <img src="' . $featured_image . '" alt="' . get_the_title() . '" />
            </a>
            <div class="post_date">' . $date_vn . '</div>
            <div class="post_title">
                <a href="' . get_the_permalink() . '">
                    ' . wp_trim_words(get_the_title(), '12', '(...)') . '
                </a>
            </div>
        </div>';
        }
        wp_reset_postdata();
    }
    $offset += $per_item_rendered;
    $data = array(
        'offset' => intval($offset),
        'xhtml' => $xhtml,
        'hideLoadmore' => $hideLoadmore,
        'found_posts' => $the_query_no_limit->found_posts,
    );
    echo wp_send_json($data);
    wp_die();
}
/* end plus article more */
/* begin Plus de personnalités */
add_action('wp_ajax_plus_de_personnalites', 'plus_de_personnalites');
add_action('wp_ajax_nopriv_plus_de_personnalites', 'plus_de_personnalites');
function plus_de_personnalites()
{
    $offset = 0;
    $per_item_rendered = 4;
    $main_item_rendered = 0;
    $xhtml = '';
    $hideLoadmore = false;
    if (isset($_POST['offset'])) {
        $offset = intval($_POST['offset']);
    }
    $args_no_limit = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => 'personne',
            ),
        ),
    );
    $the_query_no_limit = new WP_Query($args_no_limit);
    $remaining_items = intval($the_query_no_limit->found_posts) - intval($offset);
    if (intval($remaining_items) <= intval($per_item_rendered)) {
        $main_item_rendered = intval($remaining_items);
        $hideLoadmore = true;
    } else {
        $main_item_rendered = intval($per_item_rendered);
    }
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => intval($main_item_rendered),
        'offset' => intval($offset),
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => 'personne',
            ),
        ),
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $featured_image = '';
            if (!empty(get_the_post_thumbnail_url(get_the_ID(), 'full'))) {
                $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            } else {
                $featured_image = get_stylesheet_directory_uri() . "/assets/images/no-image.png";
            }
            $date = get_the_date('Y-m-d');
            $date_vn = datetimeConverterByFormat($date, "d.m.Y");
            $post_personne_url = get_field('post_personne_url', get_the_ID());
            if (!empty($post_personne_url)) {
                $xhtml .= '<div class="item"><a href="' . $post_personne_url . '" target="_blank">
    <img class="author_image" src="' . $featured_image . '" alt="' . get_the_title() . '" />
    <div class="author_name">' . get_the_title() . '</div>
    <div class="author_function">' . get_field('post_personne_fonction', get_the_ID()) . '</div>
    </a></div>';
            } else {
                $xhtml .= '<div class="item">
    <img class="author_image" src="' . $featured_image . '" alt="' . get_the_title() . '" />
    <div class="author_name">' . get_the_title() . '</div>
    <div class="author_function">' . get_field('post_personne_fonction', get_the_ID()) . '</div>
</div>';
            }

        }
        wp_reset_postdata();
    }
    $offset += $per_item_rendered;
    $data = array(
        'offset' => intval($offset),
        'xhtml' => $xhtml,
        'hideLoadmore' => $hideLoadmore,
        'found_posts' => $the_query_no_limit->found_posts,
    );
    echo wp_send_json($data);
    wp_die();
}
/* end Plus de personnalités */