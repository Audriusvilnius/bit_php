<?php
$users = [
    ['name' => 'Bebras', 'psw' => md5('123'), 'color' => 'crimson'],
    ['name' => 'Briedis', 'psw' => md5('123'), 'color' => 'pink'],
    ['name' => 'Paršas', 'psw' => md5('123'), 'color' => 'skyblue'],
    ['name' => 'Ona', 'psw' => md5('123'), 'color' => 'skyblue'],
    ['name' => 'Admin', 'psw' => md5('123'), 'color' => 'skyblue']
];


file_put_contents(__DIR__ . '/users', serialize($users));