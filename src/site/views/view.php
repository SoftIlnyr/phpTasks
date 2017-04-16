<?php
/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 16.04.17
 * Time: 16:25
 */

class View
{
    //public $template_view; // здесь можно указать общий вид по умолчанию.

    function generate($content_view, $data = null)
    {
        /*
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        */

        include 'soft/' . $content_view;
    }
}