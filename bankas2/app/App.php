<?php

namespace Bankas2;
use Bankas2\Controllers\Customer;

class App
{
    public static function start()
    {   
        session_start();
        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($url);
        return self::router($url);
    }

    private static function router(array $url)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        
        if ($url[0] == 'customers' && count($url) == 1 && $method == 'GET') {
            return (new Customer)->index();
        }

        if ($url[0] == 'customers' && $url[1] == 'create' && count($url) == 2 && $method == 'GET') {
            return (new Customer)->create();
        }

        if ($url[0] == 'customers' && $url[1] == 'save' && count($url) == 2 && $method == 'POST') {
            return (new Customer)->save();
        }

        if ($url[0] == 'customers' && $url[1] == 'edit' && count($url) == 3 && $method == 'GET') {
            return (new Customer)->edit($url[2]);
        }
        if ($url[0] == 'customers' && $url[1] == 'transfer' && count($url) == 3 && $method == 'GET') {
            return (new Customer)->transfer($url[2]);
        }

        if ($url[0] == 'customers' && $url[1] == 'update' && count($url) == 3 && $method == 'POST') {
            return (new Customer)->update($url[2]);
        }

        if ($url[0] == 'customers' && $url[1] == 'delete' && count($url) == 3 && $method == 'POST') {
            return (new Customer)->delete($url[2]);
        }
        if ($url[0] == 'customers' && $url[1] == 'plius' && count($url) == 3 && $method == 'POST') {
            return (new Customer)->plius($url[2]);
        }
        if ($url[0] == 'customers' && $url[1] == 'home' && count($url) == 2) {
            return (new Customer)->home();
        }
        if ($url[0] == 'customers' && $url[1] == 'search' && count($url) == 3 &&  $method == 'POST') {
            return (new Customer)->search($url[2]);
        }
        if ($url[0] == 'customers' && $url[1] == 'error' && count($url) == 3 && $method == 'GET') {
            return (new Customer)->error($url[2]);
        }
        return '404 NOT FOUND';
    }

    public static function view(string $__name, array $data)
    {
        ob_start();

        extract($data);

        require __DIR__ . '/../view/top.php';
        require __DIR__ . '/../view/header.php';

        require __DIR__ . '/../view/' . $__name . '.php';

        require __DIR__ . '/../view/bottom.php';


        $out = ob_get_contents();
        ob_end_clean();

        return $out;
    }

    public static function redirect($url)
    {
        header('Location: ' . URL . $url);
        return null;
    }
}