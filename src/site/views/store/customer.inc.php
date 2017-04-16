<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 16.03.17
 * Time: 19:15
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
</head>
<body>
<form action="../../store/product.php">
    <p><label>Ваше имя? <input type="text" name="firstname" required></label></p>
    <p><label>Ваша фамилия? <input type="text" name="lastname" required></label></p>
    <p><label>Ваша Раса? <select name="race" required>
                <option></option>
                <option>human</option>
                <option>elf</option>
                <option>dwarf</option>
                <option>orc</option>
            </select> </label></p>
    <p><input type="submit" name="customer" value="Далее"></p>

</form>
</body>
</html>

