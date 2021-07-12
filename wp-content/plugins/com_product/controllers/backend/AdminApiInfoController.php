<?php
class AdminApiInfoController
{
    private $_page = '';
    public function __construct()
    {
        $this->dispatch_function();
    }
    public function dispatch_function()
    {
        global $zController;
        $action = $zController->getParams('action');
        switch ($action) {
            case 'check-version':
                $this->checkVersion();
                break;
            case 'check-customer':
                $this->checkCustomer();
                break;
            default:
                $this->display();
                break;
        }
    }
    public function checkCustomer()
    {
        global $zController;
        $args = array(
            'headers' => array('custom-id' => 'zendvn-123456'),
            'body' => array('user' => 'khanhpham', 'password' => ('123456')),
        );
        $url = 'http://htmlsrc.dienkim/data-json/check-customer.php';
        $response = wp_remote_post($url, $args);
        if (intval(wp_remote_retrieve_response_code($response)) === 200) {
            $info = json_decode(wp_remote_retrieve_body($response));
            echo "<pre>" . print_r($info, true) . "</pre>";
        }
    }
    public function checkVersion()
    {
        global $zController;
        $args = array(
            'headers' => array('custom-id' => 'zendvn-123456'),
            'body' => array('user' => 'khanhpham', 'password' => '123456'),
        );
        $url = 'http://htmlsrc.dienkim/data-json/check-version.php';
        $response = wp_remote_post($url, $args);
        if (intval(wp_remote_retrieve_response_code($response)) === 200) {
            $info = json_decode(wp_remote_retrieve_body($response));
            $msg = sprintf($info->msg, $info->version, $info->price, $info->discount);
            echo "<pre>" . print_r($msg, true) . "</pre>";
        }
    }
    public function display()
    {
        global $zController;
        echo "<pre>" . print_r(__METHOD__, true) . "</pre>";
    }
}