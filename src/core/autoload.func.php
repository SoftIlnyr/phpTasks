<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 15.04.17
 * Time: 17:05
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');
spl_autoload_register(function ($class_name) {
    $class_name = strtolower($class_name);
//    echo $class_name;
    if (strpos($class_name, 'controller') !== false) {
        include SITE_PATH . "/controllers/" . $class_name . ".php";
    }
    if (strpos($class_name, 'model') !== false) {
        include SITE_PATH . "/models/" . $class_name . ".php";
    }
    if (strpos($class_name, 'view') !== false) {
        include SITE_PATH . "/views/" . $class_name . ".php";
    }
});
