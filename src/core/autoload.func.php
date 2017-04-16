<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 15.04.17
 * Time: 17:05
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');
spl_autoload_register(function ($class_name) {
    include SITE_PATH . "/classes/" . $class_name . ".class.php";
});
