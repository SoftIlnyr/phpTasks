<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 15.04.17
 * Time: 15:31
 */

class Message_Model extends Model
{
    public $id;
    public $text;
    public $user;

    function __construct($id)
    {
        $this->id = $id;
    }

    static function get_data()
    {
        $users_dir = SITE_PATH . "/data";
        $msg_file = $users_dir . "/messages.json";
        $messages_db = json_decode(file_get_contents($msg_file), true);
        return $messages_db;
    }

    function save()
    {
        $users_dir = SITE_PATH . "/data";
        $msg_file = $users_dir . "/messages.json";
        $messages_db = json_decode(file_get_contents($msg_file), true);
        $messages_db[$this->id] = $this;
        file_put_contents($msg_file, json_encode($messages_db));
    }

}