<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 16.03.17
 * Time: 21:17
 */
require_once '../utils/core.func.php';
require_once '../utils/store.func.php';

static $orderNum = 0;

if (isset($_GET["order"])) {
    $data = ["firstname" => $_GET["firstname"], "lastname" => $_GET["lastname"], "race" => $_GET["race"]];
    foreach ($products[$data["race"]] as $product => $info) {
        $data[$product] = $_GET[$product];
    }
    $data["address"] = $_GET["address"];
    $orderNum += 1;
//    var_dump($data);
    $f = fopen("../dbase/orders.csv", "a");
    fputcsv($f, $data);
    fclose($f);
    showTemplate("store/confirm", []);
} else {
    echo "Ошибка";
}