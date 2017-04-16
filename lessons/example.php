<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 06.03.17
 * Time: 12:30
 */

$a = ["a", "b", "c", "d", "e"];
$b = array_slice($a, 0, count($a) / 2);
$c = array_slice($a, count($a) / 2);
print_r($b);
print_r($c);