<?php
class Backend
{
    private $_menuSlug = 'zendvn-sp-manager';
    private $_page = '';
    public function __construct()
    {
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
    }
    /* begin remove resize function image */
    public function remove_image_sizes($sizes, $metadata)
    {
        return [];
    }
    /* end remove resize function image */
}