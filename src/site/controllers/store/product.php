<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 16.03.17
 * Time: 19:19
 */

require_once '../utils/core.func.php';
require_once '../utils/store.func.php';

if (isset($_GET["customer"])) {
    $data = ["firstname" => $_GET["firstname"], "lastname" => $_GET["lastname"], "race" => $_GET["race"], "products" => $products];
//    switch ($_GET["race"]) {
//        case "human":
//            showTemplate('store/human', $data);
//            break;
//        case "elf":
//            showTemplate('store/elf', $data);
//            break;
//        case "dwarf":
//            showTemplate('store/dwarf', $data);
//            break;
//        case "orc":
//            showTemplate('store/orc', $data);
//            break;
//    }
    showTemplate("store/product", $data);
}
