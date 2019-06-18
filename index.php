<?php

require 'core/bootstrap.php';

// $router = new Router;

// require 'routes.php';

// var_dump($_SERVER);
// $uri = trim($_SERVER['REQUEST_URI'], '/');
// var_dump($uri);
// require $router->direct($uri);
// die(var_dump($app));

require $router = Router::load('routes.php')
        ->direct(Request::uri());