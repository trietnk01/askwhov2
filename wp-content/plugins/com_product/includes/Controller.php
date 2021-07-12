<?php
class zController
{
    public $_data = array();
    public function __construct($options = array())
    {
    }
    public function isPost()
    {
        $flag = ($_SERVER['REQUEST_METHOD'] == 'POST') ? true : false;
        return $flag;
    }
    public function getParams($name = null)
    {
        if (empty($name)) {
            return $_REQUEST;
        } else {
            $val = (isset($_REQUEST[$name])) ? $_REQUEST[$name] : '';
            return $val;
        }
    }
    public function getSession($filename = '', $name = null, $value = null)
    {
        $obj = new stdClass();
        $file = PLUGIN_PATH . "helpers" . DIRECTORY_SEPARATOR . $filename . '.php';
        if (file_exists($file)) {
            require_once $file;
            $helperName = $filename;
            $obj = new $helperName($name, $value);
        }
        return $obj;
    }
    public function getHelper($filename = '')
    {
        $obj = new stdClass();
        $file = PLUGIN_PATH . "helpers" . DIRECTORY_SEPARATOR . $filename . '.php';
        if (file_exists($file)) {
            require_once $file;
            $helperName = $filename;
            $obj = new $helperName();
        }
        return $obj;
    }
    public function getController($dir = "", $filename = "")
    {
        $obj = new stdClass();
        $file = PLUGIN_PATH . "controllers" . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $filename . '.php';
        if (file_exists($file)) {
            require_once $file;
            $controllerName = $filename;
            $obj = new $controllerName();
        }
        return $obj;
    }
    public function getModel($dir = "", $filename = "")
    {
        $obj = new stdClass();
        $file = PLUGIN_PATH . "models" . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $filename . '.php';
        if (file_exists($file)) {
            require_once $file;
            $modelName = $filename;
            $obj = new $modelName();
        }
        return $obj;
    }
    public function getView($dir = "", $filename = "")
    {
        $file = PLUGIN_PATH . "templates" . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $filename . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }
}