<?php ob_start();?>
<!DOCTYPE html>
<html <?php language_attributes()?> data-user-agent="<?php echo $_SERVER['HTTP_USER_AGENT'] ?>">

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" href="<?php echo get_field("op_logo", "option"); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php wp_head();?>
</head>

<body>
    <?php
$show_ic_scrollDown = true;
if (is_page('contact')) {
    $show_ic_scrollDown = false;
}
if (intval(get_queried_object_id()) === 0) {
    $show_ic_scrollDown = false;
}
if (boolval($show_ic_scrollDown) === true) {
    ?>
    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_scrollDown.svg'; ?>"
        alt="<?php echo get_bloginfo('name'); ?>" class="arrow_down">
    <?php
}
?>
    <div class="menu_back_drop">
        <div class="askwho_container">
            <?php
$args = array(
    'menu' => '',
    'container' => '',
    'container_class' => '',
    'container_id' => '',
    'menu_class' => 'mainmenu',
    'echo' => true,
    'fallback_cb' => 'wp_page_menu',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 3,
    'walker' => '',
    'theme_location' => 'menu_sidebar',
    'menu_li_actived' => 'active',
    'menu_item_has_children' => 'menu-item-has-children',
    'add_li_class' => 'dropdown',
);
wp_nav_menu($args);
?>
            <ul class="i_special">
                <li><a href="javascript:void(0);">Spécial Chefs</a></li>
                <li><a href="javascript:void(0);">Spécial Arts & Culture</a></li>
            </ul>
            <ul class="i_collect">
                <li><a href="javascript:void(0);">Mentions légales et politique des cookies</a></li>
                <li><a href="javascript:void(0);">Accessibilité</a></li>
            </ul>
        </div>
        <a href="<?php echo site_url(); ?>" class="logoFooter">
            <img src="<?php echo get_field('op_logo', 'option'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </a>
    </div>
    <div class="contact_navbar">
        <a href="<?php echo site_url('contact'); ?>" class="contactMenuMobile">Contact</a>
        <button type="button" class="navbar_toggle_v2">
            <i class="ic burger"></i>
        </button>
    </div>
    <header>
        <?php
$args = array(
    'menu' => '',
    'container' => '',
    'container_class' => '',
    'container_id' => '',
    'menu_class' => 'menu_header',
    'echo' => true,
    'fallback_cb' => 'wp_page_menu',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul  id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 3,
    'walker' => '',
    'theme_location' => 'primary',
    'menu_li_actived' => 'active',
    'menu_item_has_children' => 'menu-item-has-children',
    'add_li_class' => 'dropdown',
);
wp_nav_menu($args);
?>
    </header>
    <div class="menu_sidebar">
        <div class="fabars_sidebar">
            <a href="<?php echo site_url(); ?>" class="logo_top_sidebar">
                <img src="<?php echo get_field('op_logo', 'option'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
            </a>
            <button type="button" class="navbar_href">
                <i class="ic burger"></i>
            </button>
            <a href="<?php echo site_url("contact"); ?>" class="navbar_contact">Contact</a>
        </div>
    </div>
    <a href="<?php echo site_url(); ?>" class="logo_top_mobile">
        <img src="<?php echo get_field('op_logo', 'option'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
    </a>