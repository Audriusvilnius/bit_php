<?php

use Bankas2\App;


define('URL', 'http://bankasdu.lt/');

require __DIR__ . '/../vendor/autoload.php';

$response = App::start();

echo $response;