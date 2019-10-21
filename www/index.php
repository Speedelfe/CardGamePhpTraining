<?php

use cgpt\module\maumau\handler\AboutHandler;
use cgpt\module\maumau\handler\MainHandler;

require __DIR__ . '/vendor/autoload.php';

spl_autoload_register(function ($path) {
    $path = substr($path, 4);
    $path = str_replace("\\", "/", $path);
    require_once __DIR__ . $path . '.php';
});

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addRoute(['GET', 'POST'], '/', new MainHandler());
    $r->addRoute(['GET', 'POST'], '/about', new AboutHandler());
    // {id} must be a number (\d+)
    //$r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
    // The /{title} suffix is optional
    //$r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        echo "Found!";
        $handler->handle();

        break;
}
