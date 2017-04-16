<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 06.03.17
 * Time: 12:21
 */

function merge_sort($array)
{

    if (is_array($array)) {
        if (count($array) > 1) {
            $part1 = array_slice($array, 0, count($array) / 2);
            $part2 = array_slice($array, count($array) / 2);
            $part1 = merge_sort($part1);
            $part2 = merge_sort($part2);

            $res = [];

            $cout1 = 0;
            $cout2 = 0;
            for ($k = 0; $k < count($array); $k++) {
                if ($cout1 == count($part1)) {
                    $res[$k] = $part2[$cout2];
                    $cout2++;
                } elseif ($cout2 == count($part2)) {
                    $res[$k] = $part1[$cout1];
                    $cout1++;
                } elseif ($cout2 == count($part2) or $part1[$cout1] < $part2[$cout2]) {
                    $res[$k] = $part1[$cout1];
                    $cout1++;
                } else {
                    $res[$k] = $part2[$cout2];
                    $cout2++;
                }

            }
            unset($k);
            return $res;

        }

    }
    return $array;

}


$arr = [3, 2, 1, 0];
$barr = merge_sort($arr);
echo "result\n";
print_r($barr);