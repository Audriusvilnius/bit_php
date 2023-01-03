<?php


namespace Bankas;

use Front\Controllers\Bankas;

class App
{
    public static function start()
    {

        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($url);
        return self::router($url);
    }
    private static function router(array $url)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        print_r($url);
    }
}