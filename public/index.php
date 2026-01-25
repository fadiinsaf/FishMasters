<?php
require_once "../vendor/autoload.php";
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);
$path = explode('/', $path);
$controllerName = ucfirst(strtolower($path[1]));
$methodName = strtolower($path[2]);
$params = [];
$params = array_slice($path, 3);
$controllerClass = 'App\\Controllers\\' . $controllerName . 'Controller';
if (!class_exists($controllerClass)) {
    echo '404 - Class Not Found';
    exit;
}
$controller = new $controllerClass();
if (!method_exists($controllerClass, $methodName)) {
    echo '404 - Method Not Found';
    exit;
}
call_user_func_array([$controller, $methodName], $params);
