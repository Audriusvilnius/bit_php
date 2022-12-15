<?php
$users = [
[ 'name'=> 'Bebras', 'psw' => '123', 'color'=>'crimson'],
[ 'name'=> 'Briedis', 'psw' => '123', 'color'=>'pink'],
[ 'name'=> 'Paršas', 'psw' => '123', 'color'=>'skyblue']
];


file_put_contents(__DIR__ . '/users', serialize($users));