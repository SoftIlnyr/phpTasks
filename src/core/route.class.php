<?php

/**
 * Created by PhpStorm.
 * User: softilnyr
 * Date: 16.04.17
 * Time: 16:03
 */
class Route
{
    static function start()
    {
        $controllerName = "chat";
        $actionName = "page";

        // PARSE REQUEST
        // Get request string as pattern: /controller/action/param1/param2
        $requesturiInfo = parse_url($_SERVER['REQUEST_URI']);
        $requestPaths = explode('/', $requesturiInfo['path']);
        // Get controller name
        if (!empty($requestPaths[1])) {
            $controllerName = $requestPaths[1];
        }
        // Get action name
        if (!empty($requestPaths[2])) {
            $actionName = $requestPaths[2];
        }
        // Get Path params
        if (count($requestPaths) >= 3) {
            $pathParams = array_slice($requestPaths, 3);
        } else {
            $pathParams = [];
        }

        $controllerName = $controllerName . "_controller";
        $controllerFile = strtolower($controllerName) . ".php";

        // GET AND CALL ACTION
        $controllerPath = SITE_PATH . '/controllers/soft/' . $controllerFile;
        $actionName = 'action_' . $actionName;

        if (file_exists($controllerPath)) {
            require_once $controllerPath;
        } else {
//            echo $controllerPath;
//            Route::ErrorPage404();
        }

        $controller = new $controllerName();
        $action = $actionName;


        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            echo $controller . " " . $action;
//            Route::ErrorPage404();
        }

    }

    function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }
}