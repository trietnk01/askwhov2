<?php
add_action('init', 'p_load_support');
function p_load_support()
{
    register_nav_menus(
        array(
            "primary" => __("Mainmenu"),
            "menu_sidebar" => __("Menu sidebar"),
            "menu_mobile" => __("Menu mobile"),
            'menu_collection' => __('Menu collection'),
        )
    );
}