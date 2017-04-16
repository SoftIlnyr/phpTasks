<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 27.02.17
 * Time: 19:08
 */

$a = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($a as $i) {
    echo "<table border='1' align='center'>";
    echo "<tr>";
    foreach ($a as $j) {
        echo "<td style='width: 100px'>".$j . " * " . $i . " = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
    echo "</table>";

}
unset($a);