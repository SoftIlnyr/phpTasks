<?php

/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 29.03.17
 * Time: 16:16
 */
class Chat_Controller extends Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function action_page()
    {
        // Process request with using of models
        $data = array();
        $users_dir = SITE_PATH . "/data";
        if (isset($_POST["message"])) {
            $users_db = json_decode(file_get_contents($users_dir . "/users.json"));
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

                if (!empty($text)) {
                    $data["text"] = $text;
                } else {
                    $errors["text"] = "Сообщение не должно быть пустым";
                }
            }

            if (sizeof($errors) == 0) {
                $users_db = User_Model::get_data();
                $messages_db = Message_Model::get_data();

                $message = new Message_Model(sizeof($messages_db));
                $message->text = $data["text"];
                $message->user = $users_db[$data["email"]];

                $message->save();

                header("Location: /chat");
                exit();
            } else {
                $viewData = array('info' => $data, 'errors' => $errors, 'messages' => Message_Model::get_data());
                var_dump($viewData);
                $this->view->generate('chat.inc.php', $viewData);
            }
        } else {
            $messages_db = Message_Model::get_data();

            $viewData = array('messages' => $messages_db);
            $this->view->generate('chat.inc.php', $viewData);

        }

        // Make Response Data

    }

}

