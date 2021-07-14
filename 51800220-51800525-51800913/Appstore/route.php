<?php
    $supported_controllers = array(
        'application' => array('index', 'view'),
        'entertainment' => array('index', 'view'),
        'movie' => array('index', 'view'),
        'pages'=> array('error')
    );

    if (!array_key_exists($controller, $supported_controllers) ||
        !in_array($action, $supported_controllers[$controller])) {
        $controller = 'pages';
        $action = 'error';
    }
    
    require_once("controllers/" . $controller. "_controller.php");
    // PagesController
    $className = ucfirst($controller) . "Controller";

    $obj = new $className();
    
    $obj->$action();

?>