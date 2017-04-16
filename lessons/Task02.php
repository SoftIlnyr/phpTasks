<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 27.02.17
 * Time: 19:22
 */

$n = 4;
$res = 0;

for ($i = 1; $i <= $n; $i++) {
    $a = 2 * $i - 1;
    $b = 1 / pow($a, 2) * pow(-1, $i + 1);
    $res += $b;
}
unset($i);
echo $res;
