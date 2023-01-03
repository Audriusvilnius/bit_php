<?php


namespace Bankas2;

use Bankas2\Controllers\Bankas;

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

        if ($url[0] == 'grybai' && count($url) == 1 && $method == 'GET') {
            return (new Bankas)->index();
        }

        if ($url[0] == 'grybai' && $url[1] == 'create' && count($url) == 2 && $method == 'GET') {
            return (new Bankas)->create();
        }

        if ($url[0] == 'grybai' && $url[1] == 'save' && count($url) == 2 && $method == 'POST') {
            return (new Bankas)->save();
        }

        if ($url[0] == 'grybai' && $url[1] == 'edit' && count($url) == 3 && $method == 'GET') {
            return (new Bankas)->edit($url[2]);
        }

        if ($url[0] == 'grybai' && $url[1] == 'update' && count($url) == 3 && $method == 'POST') {
            return (new Bankas)->update($url[2]);
        }

        if ($url[0] == 'grybai' && $url[1] == 'delete' && count($url) == 3 && $method == 'POST') {
            return (new Bankas)->delete($url[2]);
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