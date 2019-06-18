<?php

class Router 
{
    public $routes = [
        'GET'   => [],
        'POST'  => []
    ];

    public static function load($file)
    {
        $router =  new static;
        // $router =  new sef;
        require $file;

        return $router;
    }
    
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    public function direct($uri, $request_type)
    {
        //ejemplo.com/about/culture
        if(array_key_exists($uri, $this->routes[$request_type])) {
            return $this->routes[$request_type][$uri];
        }

        throw new Exception('La ruta no existe');
    }


}