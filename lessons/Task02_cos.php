<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 27.02.17
 * Time: 19:22
 */

$n = 4;
$x = 5;
$res = $x + cos($x);

for ($i = 1; $i < $n; $i++) {
    $res = $x + cos($res);
}
unset($i);
echo $res;
