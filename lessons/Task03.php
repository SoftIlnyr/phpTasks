<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 27.02.17
 * Time: 19:35
 */

function bubble_sort($a)
{
    if (is_array($a)) {
        $b = [];
        while (count($a) > 0) {
            $keys = array_keys($a);
            $min = $keys[0];
            foreach ($keys as $key) {
                if ($a[$key] < $a[$min]) {
                    $min = $key;
                }
            }
            $b[$min] = $a[$min];
            unset($a[$min]);
        }
        return $b;

    } else {
        echo "Not an array";
        return NULL;
    }
}

$arr = [3, 2, 1, "hello" => 0];
$barr = bubble_sort($arr);
print_r($barr);