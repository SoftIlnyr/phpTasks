<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 16.03.17
 * Time: 21:12
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заказ</title>
</head>
<body>
<h1>Ваши данные</h1>
<div>
    <p><?= $data["firstname"] ?> <?= $data["lastname"] ?>,</p>
    <p><?= $data["race"] ?></p>
    <h3>Товары</h3>
    <?php foreach ($data["products"][$data["race"]] as $product => $info) {
        foreach ($info as $description => $price) {
            if ($data[$product] > 0) {
                echo "<p>" . $description . " (" . $price . ") - " . $data[$product] . " штук</p>";
            }
        }
    } ?>
    <h3>Адрес</h3>
    <p><?= $data["address"] ?></p>
    <h3>Общая стоимость: <?= $data["cost"] ?></h3>
    <form action="../../store/confirm.php">
        <div><input type="text" name="firstname" value="<?= $data["firstname"] ?>" hidden></div>
        <div><input type="text" name="lastname" value="<?= $data["lastname"] ?>" hidden></div>
        <div><input type="text" name="race" value="<?= $data["race"] ?>" hidden></div>
        <?php foreach ($data["products"][$data["race"]] as $product => $info) {
            foreach ($info as $description => $price) {
                echo "<div><input type=\"text\" name=\"" . $product . "\" value=\"" . $data[$product] . "\" hidden></div>";
            }
        } ?>
        <div>
            <textarea name="address" hidden><?= $data["address"] ?></textarea>
        </div>

        <input type="submit" name="order" value="Подтвердить заказ"> <a href="../../store/customer.php">Отмена</a>


    </form>

</div>
</body>
</html>
