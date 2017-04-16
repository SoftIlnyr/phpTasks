<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 16.03.17
 * Time: 19:31
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <script type="text/javascript" src="/web/static/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/web/static/MyScripts.js"></script>
</head>
<body>
<form action="../../store/address.php">
    <div><input type="text" name="firstname" value="<?=$data["firstname"]?>" hidden></div>
    <div><input type="text" name="lastname" value="<?=$data["lastname"]?>" hidden></div>
    <div><input type="text" name="race" value="<?=$data["race"]?>" hidden></div>
    <?php foreach ($data["products"][$data["race"]] as $product => $info) {
        foreach ($info as $description => $price) {
            echo "<div><label>$description ($price) <input type=\"text\" name=\"".$product."\" required> штук.</label></div>";
        }
    }?>
<!--    <div><label>--><?//=$data["products"]["human"]?><!--<input type="text" name="product1" required> штук.</label></div>-->
<!--    <div><label>Щит из шкуры дракона (200$) <input type="text" name="product2" required>  штук.</label></div>-->
<!--    <div><label>Шлем из черепа... дракона (150$) <input type="text" name="product3" required> штук.</label></div>-->
    <div><input type="submit" name="product" value="Далее"></div>
</form>
</body>
</html>

