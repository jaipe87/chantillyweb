<?php
require_once './config/config.php';
require_dir('controller.*');

$routes = new Route(true);
$route = $routes->getRoutes();

/** @var TYPE_NAME $tpl */
/** @var TYPE_NAME $DB */
$ArrayParam = array("tpl" => $tpl, "DB" => $DB);

$c = (isset($route[1]) ? $route[1] : 'Index');


$fileName = "./controller/" . $c . 'Controller.php';

if (is_file($fileName)) {
    $Controller = $c . 'Controller';
} else {
    $Controller = 'IndexController';
}

$Controller = new $Controller($ArrayParam);


$a = (isset($route[2]) ? $route[2] : 'Index');


if (method_exists($Controller, $a)) {
    $accion = $a;
} else {

    $accion = 'Index';
}

if (isset($route[3])) {

    $arg = (isset($route[3]) ? $route[3] : []);
} else {
    $arg = null;
}


if ($arg != null) {

    call_user_func(array($Controller, $accion), $arg);
} else {
    call_user_func(array($Controller, $accion));
}
