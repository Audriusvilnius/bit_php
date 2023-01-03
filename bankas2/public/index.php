<?php

use Bankas\App;

define('URL', 'http://bankasdu.lt.lt/');

require __DIR__ . '/../vendor/autoload.php';


$response = App::start();

echo $response;