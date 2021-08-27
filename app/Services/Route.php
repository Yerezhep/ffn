<?php

namespace app\Services;

class Route
{

    static public $routes =[];

    static public function get($url,$move)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $REQUEST_URI = explode('?',$_SERVER['REQUEST_URI'])[0];
        if($method == 'GET' && $url == $REQUEST_URI){
            $controller = explode('@',$move)[0];
            $method = explode('@',$move)[1];
            $controller = 'App\Controllers\\'.$controller;
            $objectController = new $controller;
            $objectController->$method();

//            dd($objectController);
        }
        self::$routes[] =$url;
//        dd($_SERVER['REQUEST_METHOD']);

    }
    static public function post($url,$move)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $REQUEST_URI = explode('?',$_SERVER['REQUEST_URI'])[0];
        if($method == 'POST' && $url == $REQUEST_URI){
            $controller = explode('@',$move)[0];
            $method = explode('@',$move)[1];
            $controller = 'App\Controllers\\'.$controller;
            $objectController = new $controller;
            $objectController->$method();

//            dd($objectController);
        }
        self::$routes[] =$url;
    }
//
    static public function auth($routes)
    {
        if (isset($_COOKIE['login']))
        {
            $routes;
        }else{
            header('Location:/');
        }
    }
}