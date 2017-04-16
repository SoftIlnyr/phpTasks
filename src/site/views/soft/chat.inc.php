<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 29.03.17
 * Time: 16:17
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
</head>
<body>
<form action="/chat" method="post">
    <p><label>Your email: <input type="email" name="email"
                                 value="<?= isset($data["email"]) ? $data["email"] : "" ?>"></label> <?= isset($errors["email"]) ? $errors["email"] : "" ?>
    </p>
    <p><label>Type your message here: <textarea
                    name="text"><?= isset($data["text"]) ? $data["text"] : "" ?></textarea></label> <?= isset($errors["text"]) ? $errors["text"] : "" ?>
    </p>
    <p><input type="submit" name="message" value="Send!"></p>
</form>


<?php if (isset($data["messages"])) : ?>
    <?php foreach ($data["messages"] as $message): ?>
    <hr>
        <h3><img src="<?="/web/images/".$message["user"]["avatar"]?>" style="width: 150px"> <?= $message["user"]["nickname"];?></h3>
        <p><?=$message["text"]?></p>
    <?php endforeach; ?>

<?php endif; ?>
</body>
</html>
