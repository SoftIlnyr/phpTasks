<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 16.04.17
 * Time: 16:22
 */

abstract class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
    }
}