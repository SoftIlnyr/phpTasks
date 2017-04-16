<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 15.04.17
 * Time: 15:31
 */

class Message
{
    public $id;
    public $text;
    public $user;

    function __construct($id)
    {
        $this->id = $id;
    }

}