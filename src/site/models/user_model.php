<?php

class User_Model extends Model
{
    public $firstname;
    public $lastname;
    public $nickname;
    public $email;
    public $birthday;
    public $gender;
    public $password;
    public $avatar;
    public $news;

    public function __set($name, $value)
    {

        // TODO: Implement __set() method.
    }

    static function get_data()
    {
        $users_dir = SITE_PATH . "/data";
        $users_file = $users_dir . "/users.json";
        $users_db = json_decode(file_get_contents($users_file), true);
        return $users_db;
    }


}