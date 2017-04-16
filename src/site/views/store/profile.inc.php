<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 24.03.17
 * Time: 10:38
 */ ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
<h2>Регистрация завершена!</h2>
<h3>Ваши данные</h3>
<p>Firstname: <?= $data["firstname"] ?></p>
<p>Lastname: <?= $data["lastname"] ?></p>
<p>Nickname: <?= $data["nickname"] ?></p>
<p>Email: <?= $data["nickname"] ?></p>
<p>Birthday: <?= $data["birthday"]; ?></p>


</body>
</html>
