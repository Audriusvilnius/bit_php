<?php
echo '<h1>F1</h1>';


//include __DIR__. '/f2.php';

//include __DIR__. '/f2.php';


require __DIR__. '/f2.php';

$data = require __DIR__ . '/f3.php';
echo '<pre><br>';

print_r($data);