<?php
echo '<pre>';
require __DIR__ . '/Bebras.php';

$bebras1 = new Bebras;
$bebras2 = new Bebras;
// $bebras3 = $bebras1; // nekuria naujo objekto nekuria tik nuorada i objekta


// var_dump($bebras1);
// var_dump($bebras2);

echo '<h1>' . $bebras1->color() . '</h1>';
echo '<h1>' . $bebras2->age() . '</h1>';
echo '<h1>' . $bebras2->isLive() . '</h1>';

echo $bebras1->age();

print_r($bebras1);
print_r($bebras2);