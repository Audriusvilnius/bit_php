<?php
echo '<pre>';
require __DIR__ . '/Bebras.php';

$bebras1 = new Bebras;
$bebras2 = new Bebras;
$bebras3 = $bebras1; // nekuria naujo objekto nekuria tik nuorada i objekta


var_dump($bebras1);
var_dump($bebras2);