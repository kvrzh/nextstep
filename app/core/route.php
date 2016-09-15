<?php

class Route
{

    static function start()
    {

        $controller_name = 'Main';
        $action_name = 'index';

        $routers = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routers[1])) {
            $controller_name = $routers[1];
        }

        if (!empty($routers[2])) {
            $action_name = $routers[2];
        }
        if (!empty($routers[3])) {
            $item = $routers[3];
        }

        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;

        $model_file = strtolower($model_name) . '.php';
        $model_path = "app/models/" . $model_file;

        if (file_exists($model_path)) {
            include "app/models/" . $model_file;
        }

        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "app/controllers/" . $controller_file;
        try {
            if (file_exists($controller_path)) {
                include "app/controllers/" . $controller_file;

            } else {
                throw new NotFoundException();
            }
        } catch (NotFoundException $e) {
            Route::ErrorPage404();
        }


        $controller = new $controller_name;
        $action = $action_name;
        try {
            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                throw new NotFoundException;
            }
        } catch (NotFoundException $e) {
            Route::ErrorPage404();
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