<?php
class Backend
{
    private $_menuSlug = 'zendvn-sp-manager';
    private $_page = '';
    public function __construct()
    {
        if (isset($_GET['page'])) {
            $this->_page = $_GET['page'];
        }
        add_action('admin_menu', array($this, 'menus'));
        if (
            $this->_page == $this->_menuSlug . '-api-info'
        ) {
            add_action('admin_init', array($this, 'do_output_buffer'));
        }
        add_action('admin_enqueue_scripts', array($this, 'add_css_file'));
        add_filter('intermediate_image_sizes_advanced', array($this, 'remove_image_sizes'), 10, 2);
    }
    public function do_output_buffer()
    {
        ob_start();
    }
    public function add_css_file()
    {
        $js_css_ran = rand(1000, 100000);
        wp_enqueue_style('common_css', PLUGIN_URL . 'public/backend/scss/common.css', array(), $js_css_ran, 'all');
        wp_enqueue_script('common_js', PLUGIN_URL . 'public/backend/js/common.js', array("jquery"), $js_css_ran, true);
    }
    /* begin remove resize function image */
    public function remove_image_sizes($sizes, $metadata)
    {
        return [];
    }
    /* end remove resize function image */
    public function menus()
    {
        add_menu_page('HTTP API', 'HTTP API', 'manage_options', $this->_menuSlug, array($this, 'dispatch_function'), '', 3);
        add_submenu_page($this->_menuSlug, 'Get info', 'Get info', 'manage_options', $this->_menuSlug . '-api-info', array($this, 'dispatch_function'));
    }
    public function dispatch_function()
    {
        global $zController;
        $page = $this->_page;
        switch ($page) {
            case 'zendvn-sp-manager-api-info':
                $zController->getController('backend', 'AdminApiInfoController');
                break;
        }
    }
}