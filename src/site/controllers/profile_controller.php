<?php

/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 24.03.17
 * Time: 10:11
 */
class Profile_Controller extends Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function action_page()
    {
        $data['user'] = new User_Model();
        $data['user'] = unserialize($_SESSION['user']);
        $data['errors'] = $_SESSION['errors'];
        $this->view->generate('profile.inc.php', $data);
//        return ['view' => 'soft/profile',
//            'data' => $data];
    }
}
