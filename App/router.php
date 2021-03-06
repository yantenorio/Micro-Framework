<?php

namespace App;

class Router 
{
    private $router;

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function getRoutes()
    {
        return $this->router;
    }

    public function setRoutes(array $router)
    {
        $this->router = $router;
    }

    public function initRoutes()
    {
        $router['home'] = [
            'route' => '/',
            'controller' => 'userController',
            'action' => 'index'
        ];

        $router['register'] = [
            'route' => '/register',
            'controller' => 'userController',
            'action' => 'register'
        ];

        $router['create'] = [
            'route' => '/create',
            'controller' => 'userController',
            'action' => 'postUser'
        ];

        $router['login'] = [
            'route' => '/auth',
            'controller' => 'userController',
            'action' => 'AuthUser'
        ];


        $this->setRoutes($router);
    }

    public function run($url)
    {
        foreach($this->getRoutes() as $key => $router) {
            if($url == $router['route']) {
                $class = "App\\Controllers\\". ucfirst($router['controller']);

                $controller = new $class;
                
                $action = $router['action'];
                
                $controller->$action();
            }
        }
        return $url;
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}