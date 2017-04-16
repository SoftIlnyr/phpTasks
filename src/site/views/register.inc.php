<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 24.03.17
 * Time: 9:19
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<h2>Registration</h2>
<form enctype="multipart/form-data" action="register" method="post">
    <p><label>Nickname: <input type="text" name="nickname"
                               value="<?= isset($data["info"]["nickname"]) ? $data["info"]["nickname"] : "" ?>"
                               required> <?= isset($data["errors"]["nickname"]) ? $data["errors"]["nickname"] : "" ?>
        </label></p>
    <p><label>Email: <input type="text" name="email"
                            value="<?= isset($data["info"]["email"]) ? $data["info"]["email"] : "" ?>"
                            required> <?= isset($data["errors"]["email"]) ? $data["errors"]["email"] : "" ?>
        </label></p>
    <p><label>Firstname: <input type="text" name="firstname"
                                value="<?= isset($data["info"]["firstname"]) ? $data["info"]["firstname"] : "" ?>"
                                required> <?= isset($data["errors"]["firstname"]) ? $data["errors"]["firstname"] : "" ?>
        </label></p>
    <p><label>Lastname: <input type="text" name="lastname"
                               value="<?= isset($data["info"]["lastname"]) ? $data["info"]["lastname"] : "" ?>"
                               required> <?= isset($data["errors"]["lastname"]) ? $data["errors"]["lastname"] : "" ?>
        </label></p>
    <p><label>Date of Birth: <input type="date" name="birthday"
                                    value="<?= isset($data["info"]["birthday"]) ? $data["info"]["birthday"] : "" ?>"></label></p>
    <p>Gender</p> <?= isset($data["errors"]["gender"]) ? $data["errors"]["gender"] : "" ?>
    <p><label>Male <input type="radio" name="gender" value="male"></label> <label>Female <input type="radio"
                                                                                                name="gender"
                                                                                                value="female"></label>
    </p>
    <p><label>Password: <input type="password" name="pass" value=""
                               required> <?= isset($data["errors"]["password"]) ? $data["errors"]["password"] : "" ?>
        </label></p>
    <p><label>Password confirmation: <input type="password" name="passconf" value="" required></label></p>
    <p><label>Avatar: <input type="file" name="avatar"></label></p>
    <p><label>I accept the License <input type="checkbox" name="license"
                                          value="accept"></label> <?= isset($data["errors"]["license"]) ? $data["errors"]["license"] : "" ?>
    </p>
    <p><label>Send me news <input type="checkbox" name="news"
                                  value="accept"></label> <?= isset($data["errors"]["news"]) ? $data["errors"]["news"] : "" ?></p>

    <input type="submit" name="register" value="Register">
</form>
</body>
</html>

