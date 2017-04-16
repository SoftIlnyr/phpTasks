<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 15.04.17
 * Time: 15:31
 */


class User
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


}