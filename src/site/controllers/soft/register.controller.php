<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 24.03.17
 * Time: 9:17
 */


function action_register_page()
{
    $data = array();
    if (isset($_POST["register"])) {
        $errors = array();

        if (isset($_POST["nickname"])) {
            $nickname = $_POST["nickname"];
            $nickname = htmlspecialchars($nickname);
            $nickname = trim($nickname);
            $data["nickname"] = $nickname;
        } else {
            $errors["nickname"] = "Nickname не должен быть пустым";
        }

        if (isset($_POST["email"])) {
            $email = $_POST["email"];
            $email = htmlspecialchars($email);
            $email = trim($email);

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $data["email"] = $email;
            } else {
                $errors["email"] = "Некорректный формат email";
            }
        } else {
            $errors["email"] = "Email не должен быть пустым";
        }

        if (isset($_POST["pass"]) && isset($_POST["passconf"])) {
            $pass = $_POST["pass"];
            $pass = htmlspecialchars($pass);
            $pass = trim($pass);
            $passconf = $_POST["passconf"];
            $passconf = htmlspecialchars($passconf);
            $passconf = trim($passconf);

            if ($pass === $passconf) {
                $data["pass"] = $pass;
                $data["passconf"] = $pass;
            } else {
                $errors["password"] = "Пароли не совпадают";
            }
        } else {
            $errors["password"] = "Необходим пароль для регистрации";
        }

        if (isset($_POST["firstname"])) {
            $firstname = $_POST["firstname"];
            $firstname = htmlspecialchars($firstname);
            $firstname = trim($firstname);
            $data["firstname"] = $firstname;
        } else {
            $errors["firstname"] = "Firstname - обязательное поле";
        }


        if (isset($_POST["lastname"])) {
            $lastname = $_POST["lastname"];
            $lastname = htmlspecialchars($lastname);
            $lastname = trim($lastname);
            $data["lastname"] = $lastname;
        } else {
            $errors["lastname"] = "lastname - обязательное поле";
        }


        if (isset($_POST["birthday"])) {
            $birthday = $_POST["birthday"];
            $birthday = htmlspecialchars($birthday);
            $birthday = trim($birthday);
            $data["birthday"] = $birthday;
        }

        if (isset($_POST["gender"])) {
            $gender = $_POST["gender"];
            $gender = htmlspecialchars($gender);
            $gender = trim($gender);
            $data["gender"] = $gender;
        } else {
            $errors["gender"] = "gender - обязательное поле";
        }

        if (isset($_POST["license"])) {
            $data["license"] = true;
        } else {
            $errors["license"] = "Вы не приняли соглашение!";
        }

        if (isset($_POST["news"])) {
            $data["news"] = true;
        }

        if (isset($_FILES['avatar'])) {
            $images_dir = PUBLIC_PATH . "/images";
            echo $images_dir;

            $fileData = $_FILES['avatar'];
            $tmp_name = $fileData['tmp_name'];
            if (!is_uploaded_file($tmp_name)) {
                $errors['avatar'] = "No file uploaded";
            } else if (!($fileData['size'] < 5 * 1024 * 1024)) {
                $errors['avatar'] = "File is too big";
            } else if (!in_array($fileData['type'], ["image/jpg", "image/jpeg"])) {
                $errors['avatar'] = "Incorrect format of file";
            } else {
                move_uploaded_file($tmp_name, $images_dir . "/" . $fileData['name']);
                $data['avatar'] = $fileData['name'];
            }
        }

        if (sizeof($errors) <= 1) {
//        print_r($data);
            $users_dir = SITE_PATH . "/data";

            $_SESSION["data"] = $data;
            $_SESSION["errors"] = $errors;

            $user = new User();
            $user->firstname = $data["firstname"];
            $user->lastname = $data["lastname"];
            $user->email = $data["email"];
            $user->nickname = $data["nickname"];
            $user->password = $data["pass"];
            $user->gender = $data["gender"];
            $user->birthday = $data["birthday"];
            $user->avatar = $data["avatar"];
            $user->news = $data["news"];

            $_SESSION["user"] = serialize($user);

            $file = $users_dir . "/users.json";
            $json = json_decode(file_get_contents($file), true);
            $json[$user->email] = $user;
            file_put_contents($file, json_encode($json));

            header("Location: /profile");
            exit();
        } else {
            return ['view' => 'soft/register',
                'data' => [
                    'info' => $data,
                    'errors' => $errors
                ]];
        }
    } else {
        return ['view' => 'soft/register',
            'data' => [
            ]];
    }


}