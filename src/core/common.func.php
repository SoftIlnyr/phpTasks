<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 06.03.17
 * Time: 18:52
 */

function showTemplate($template, $data){
    //Chack template existance
    include_once SITE_PATH . '/views/' . $template. '.inc.php';

}

function showTemplateWithErrors($template, $data, $errors){
    //Chack template existance
    $users_dir = ROOT . "src/dbase";
    $images_dir = ROOT . "src/images";
    $msg_file = $users_dir . "/messages.json";
    $messages_db = json_decode(file_get_contents($msg_file), true);
    $users_file = $users_dir . "/users.json";
    $users_db = json_decode(file_get_contents($users_file), true);

    $data["messages"] = $messages_db;
    include_once ROOT . 'web/views/' . $template. '.inc.php';

}


function showPage($content){
    if (file_exists(ROOT.'views/header.inc.php')){
        include_once ROOT . 'web/views/header.inc.php';
    } else {
        exit('Error with template');
    }
    echo $content;

}