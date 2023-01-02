<?php

use Front\App;

//define('URL', 'http://front.lt/');
define('URL', 'http://localhost/bit_php/front/public/');


require __DIR__ . '/../vendor/autoload.php';


$response = App::start();

echo $response;