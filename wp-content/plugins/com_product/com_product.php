<?php

/*

Plugin Name: com_product

Plugin URI: https://chuyendoiso365.com

Description: com_product

Author: diennk

Version: 1.0

Author URI: https://chuyendoiso365.com

 */
require_once 'define.php';
require_once PLUGIN_PATH . 'includes' . DIRECTORY_SEPARATOR . 'Controller.php';
$zController = new zController();
if (is_admin()) {
    require_once 'backend.php';
    new Backend();
}