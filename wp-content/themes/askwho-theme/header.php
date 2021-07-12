<?php ob_start();?>
<!DOCTYPE html>
<html <?php language_attributes()?> data-user-agent="<?php echo $_SERVER['HTTP_USER_AGENT'] ?>">

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" href="<?php echo get_field("st_ico", "option"); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php wp_head();?>
</head>

<body>
    <div id="preloader"></div>
    <div class="menu_sidebar">
        <div class="fabars_sidebar">
            <a href="javascript:void(0);" class="navbar_href">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            <a href="<?php echo site_url("contact"); ?>" class="navbar_contact">Contact</a>
        </div>
    </div>
    <div class="menu_back_drop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                </div>
            </div>
        </div>
    </div>
    <header class="fixed-top scroll-change" data-menu-anima="fade-in">
        <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
            <div class="navbar navbar-main">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <div class="nav navbar-nav navbar-right">
                            <?php
$args_desktop = array(
    'menu' => '',
    'container' => '',
    'container_class' => '',
    'container_id' => '',
    'menu_class' => 'nav navbar-nav menu_desktop',
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
$args_mobile = array(
    'menu' => '',
    'container' => '',
    'container_class' => '',
    'container_id' => '',
    'menu_class' => 'nav navbar-nav menu_mobile',
    'echo' => true,
    'fallback_cb' => 'wp_page_menu',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul  id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 3,
    'walker' => '',
    'theme_location' => 'menu_mobile',
    'menu_li_actived' => 'active',
    'menu_item_has_children' => 'menu-item-has-children',
    'add_li_class' => 'dropdown',
);
wp_nav_menu($args_desktop);
wp_nav_menu($args_mobile);
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="arrow_down">
        <i class="fa fa-arrow-down" aria-hidden="true"></i>
    </div>