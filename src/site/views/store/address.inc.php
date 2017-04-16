<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 16.03.17
 * Time: 20:18
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Address</title>
</head>
<body>
<form action="../../store/order.php">
    <div>Стоимость заказа: <?=$data["cost"]?></div>
    <div><input type="text" name="firstname" value="<?=$data["firstname"]?>" hidden></div>
    <div><input type="text" name="lastname" value="<?=$data["lastname"]?>" hidden></div>
    <div><input type="text" name="race" value="<?=$data["race"]?>" hidden></div>
    <?php foreach ($data["products"][$data["race"]] as $product => $info) {
        foreach ($info as $description => $price) {
            echo "<div><input type=\"text\" name=\"" . $product . "\" value=\"" . $data[$product] . "\" hidden></div>";
        }
    }?>
    <div>
        <label>Адрес доставки: <textarea name="address"></textarea> </label>
    </div>
    <input type="submit" name="order" value="Оформить заказ">
</form>
</body>
</html>
