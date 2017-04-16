<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 27.03.17
 * Time: 17:55
 */

$uploads_dir = '/uploads';
foreach ($_FILES as $name => $fileData) {
    if ($fileData['error'] === UPLOAD_ERR_OK) {
        $tmp_name = $fileData['tmp_name'];
        if (is_uploaded_file($tmp_name)) {
            move_uploaded_file($tmp_name, $uploads_dir."/".$fileData['name']);
        } else {
            $notices[] = "Hacker!";
        }
    } elseif ($fileData['error'] === UPLOAD_ERR_INI_SIZE) {
        $notices[] = "File is too big";

    }
}