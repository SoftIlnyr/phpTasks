<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 27.02.17
 * Time: 19:08
 */

$a = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($a as $i) {
    foreach ($a as $j) {
        echo $j . " * " . $i . " = " . ($i * $j) . "|\t";
    }
    echo "\n";

}
unset($a);