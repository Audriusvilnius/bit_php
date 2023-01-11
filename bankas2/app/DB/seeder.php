<?php
$users = [
    ['name' => 'Viens', 'psw' => md5('123')],
    ['name' => 'Du', 'psw' => md5('123')],
    ['name' => 'Tris', 'psw' => md5('123'),]
];


file_put_contents(__DIR__ . '/users', serialize($users));