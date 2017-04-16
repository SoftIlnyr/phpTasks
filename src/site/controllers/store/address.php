<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 16.03.17
 * Time: 19:32
 */

require_once '../utils/core.func.php';
require_once '../utils/store.func.php';

if (isset($_GET["product"])) {
    $data = ["firstname" => $_GET["firstname"], "lastname" => $_GET["lastname"], "race" => $_GET["race"]];
    $cost = 0;
    foreach ($products[$data["race"]] as $product => $info) {
        foreach ($info as $description => $price) {
            $cost += $_GET[$product] * $price;
        }
        $data[$product] = $_GET[$product];
    }
    $data["cost"] = $cost;
    $data["products"] = $products;
//    print_r($data);
    showTemplate("store/address", $data);
}