<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 29.03.17
 * Time: 16:16
 */

function action_chat_page()
{
    // Process request with using of classes

    $data = array();
    $users_dir = SITE_PATH . "/data";
    if (isset($_POST["message"])) {
        $users_db = json_decode(file_get_contents($users_dir. "/users.json"));
        $errors = array();
        if (isset($_POST["email"])) {
            $email = $_POST["email"];
            $email = htmlspecialchars($email);
            $email = trim($email);

            if (array_key_exists($email, $users_db)) {
                $data["email"] = $email;
            } else {
                $errors["email"] = "Данный email не зарегистрирован";
            }

        } else {
            $errors["email"] = "Email не должен быть пустым";
        }

        if (isset($_POST["text"])) {
            $text = $_POST["text"];
            $text = htmlspecialchars($text);
            $text = trim($text);

            if (sizeof($text) > 0) {
                $data["text"] = $text;
            } else {
                $errors["text"] = "Сообщение не должно быть пустым";
            }
        }

        if (sizeof($errors) == 0) {
            $users_file = $users_dir . "/users.json";
            $users_db = json_decode(file_get_contents($users_file), true);
            $msg_file = $users_dir . "/messages.json";
            $messages_db = json_decode(file_get_contents($msg_file), true);
            $message = new Message(sizeof($messages_db));
            $message->text = $data["text"];
            $message->user = $users_db[$data["email"]];
            $messages_db[$message->id] = $message;
            file_put_contents($msg_file, json_encode($messages_db));
            header("Location: /chat");
            exit();
        } else {
            return ['view' => 'soft/chat',
                'data' => [
                    'info' => $data,
                    'errors' => $errors,
                ]];
        }
    } else {
        $msg_file = $users_dir . "/messages.json";
        $messages_db = json_decode(file_get_contents($msg_file), true);
        $users_file = $users_dir . "/users.json";
        $users_db = json_decode(file_get_contents($users_file), true);

        $data["messages"] = $messages_db;

        return ['view' => 'soft/chat',
            'data' => [
                'messages' => $messages_db,
            ]];
    }

    // Make Response Data

}
