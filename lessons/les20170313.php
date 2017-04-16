<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 13.03.17
 * Time: 18:12
 */

echo $_GET["i"];
if (filter_has_var($_GET["i"], "i")) {
    echo $_GET["i"];
    unset($_GET["i"]);

};

$errors = array();
if (isset($_POST['save'])) {
    if (!filter_var($_POST['email'])) {
        $errors[] = "Incorrect email";
    }
}

if (isset($_POST["save"])) {

    echo $_POST["text"];
    echo $_POST["email"];
    echo $_POST["date"];
    echo $_POST["time"];
    echo $_POST["number"];
    echo $_POST["rad01"];
    echo $_POST["ch01"][0];
    echo $_POST["ch01"][1];
    echo $_POST["ch01"][2];
}
?>

<form action="" method="post">
    <p><label>Text: <input type="text" name="text"></label></p>
    <p><label>Email: <input type="email" name="email"></label></p>
    <p><label>date: <input type="date" name="date"></label></p>
    <p><label>time: <input type="time" name="time"></label></p>
    <p><label>number: <input type="number" name="number"></label></p>
    <p><label>radio: <input type="radio" name="rad01" value="rad01"><input type="radio" name="rad01"
                                                                           value="rad02"><input type="radio"
                                                                                                name="rad01"
                                                                                                value="rad03"></label>
    </p>
    <p><label>checkbox: <input type="checkbox" name="ch01[]" value="ch01"><input type="checkbox" name="ch01[]" value="ch02"><input
                    type="checkbox" name="ch01[]" value="ch03"></label></p>
    <p><label>select: <select name="select">
                <option>opt01</option>
                <option>opt02</option>
                <option>opt03</option>
                <option>opt04</option>

            </select></label></p>

    <!--    <p><input type="text" name="i" value="val"></p>-->
    <input type="submit" value="go" name="save">

</form>