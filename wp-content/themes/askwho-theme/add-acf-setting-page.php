<?php
if (!class_exists('ACF')) {
    return;
}
acf_add_options_page(array(
    'page_title' => 'PAGE Option',
    'menu_title' => 'PAGE Option',
    'menu_slug' => 'p_option_page',
    'capability' => 'edit_posts',
    'redirect' => admin_url('admin.php?page=page_option'),
));