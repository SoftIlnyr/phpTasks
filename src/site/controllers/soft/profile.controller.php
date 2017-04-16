<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 24.03.17
 * Time: 10:11
 */



function action_profile_page()
{
    $data['user'] = new User();
    $data['user'] = unserialize($_SESSION['user']);
    $data['errors'] = $_SESSION['errors'];
    return ['view' => 'soft/profile',
        'data' => $data ];
}


