<?php
try {
    // controller
    require_once 'application/controller/Controller.php';
    require_once 'application/controller/LoaderController.php';

    // utilitarios
    require_once 'application/helper/my_helper.php';
    require_once 'application/config/constants.php';

    session_start();
    $controller = 'Autenticar';

    // todo esta logica hara el papel de un FrontController
    if (!isset($_GET['c'])) {
        require_once "application/controller/$controller" . "Controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->View();
    } else {
        // obtenemos el controlador que queremos cargar
        $controller = ucwords($_GET['c']);

        if (file_exists("application/controller/$controller" . "Controller.php")) {
            $accion = isset($_GET['a']) ? $_GET['a'] : 'View';
            // instanciamos el controlador
            require_once "application/controller/$controller" . "Controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            // llama la accion
            if (method_exists($controller, $accion)) {
                call_user_func(array($controller, $accion));
            } else {

                call_user_func(array('LoaderController', 'View'));
            }
        } else {
            call_user_func(array('LoaderController', 'View'));
        }
    }
} catch (Exception $e) {
    die($e->getMessage());
}
