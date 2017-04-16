<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 06.03.17
 * Time: 18:51
 */

require_once '../utils/core.func.php';
if (!isset($_REQUEST['id']) || strlen($_REQUEST['id'] === 0)) {
    showPage("Please specify News ID");
    exit();
}
$id = (int) $_REQUEST['id'];
$content = 'News page #' . ($id);
showHeader();
showTemplate('news/show', ['id' => $id]);
showFooter();