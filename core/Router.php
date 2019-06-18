<?php

class Router 
{
    protected $routes = [];

    public static function load($file)
    {
        $router =  new static;
        // $router =  new sef;
        require $file;

        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        //ejemplo.com/about/culture
        if(array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('La ruta no existe');
    }
}