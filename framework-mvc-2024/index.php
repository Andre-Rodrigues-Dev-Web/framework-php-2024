<?php

require_once 'config/config.php';
require_once 'app/models/Database.php';

$url = isset($_GET['url']) ? $_GET['url'] : 'home';

$controllerName = ucfirst($url) . 'Controller';
$controllerFile = 'app/controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName();
    $controller->index();
} else {
    echo "404 Not Found";
}
