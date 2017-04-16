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
<p>Firstname: <?= $data["user"]->firstname ?></p>
<p>Lastname: <?= $data["user"]->lastname ?></p>
<p>Nickname: <?= $data["user"]->nickname ?></p>
<p>Email: <?= $data["user"]->email ?></p>
<p>Gender: <?= $data["user"]->gender ?></p>
<?php if (isset($data["user"]->birthday)):?>
    <p>Birthday: <?= $data["user"]->birthday; ?></p>
<?php endif;?>
<?php if (isset($data["user"]->news)):?>
    <p>Subscribed to news</p>
<?php endif;?>

<?php if (isset($data["user"]->avatar)):?>
    <img src="<?='/web/images/' . $data['user']->avatar?>" style="width: 300px">
<?php endif;?>




</body>
</html>
