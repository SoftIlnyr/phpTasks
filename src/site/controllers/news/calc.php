<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 06.03.17
 * Time: 19:33
 */

require_once '../utils/core.func.php';
if (isset($_POST['var1']) && isset($_POST['var2']) && isset($_POST['action'])) {
    $var1= $_POST['var1'];
    $var2= $_POST['var2'];
    $action = $_POST['action'];
    $result = 0;
    switch ($action) {
        case '+':
            $result = $var1 + $var2;
            break;
        case '-':
            $result = $var1 - $var2;
            break;
        case '*':
            $result = $var1 * $var2;
            break;
        case '/':
            $result = $var1 / $var2;
            break;
    }

    showHeader();
    showTemplate('news/calc', ['var1' => $var1, 'var2' => $var2, 'result' => $result]);
    showFooter();
} else {
    showHeader();
    showTemplate('news/calc', []);
    showFooter();
}


