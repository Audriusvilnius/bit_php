<?php

$data = [
    ['code' => rand(1000000, 10000000), 'account' => 'LT' . rand(10, 99) . '6300' . rand(100000000000, 999999999999), 'balance' => 0, 'name' => 'Vardas', 'surname' => 'Pavarde', 'personal_id' => 37402030800],
    ['code' => rand(1000000, 10000000), 'account' => 'LT' . rand(10, 99) . '6300' . rand(100000000000, 999999999999), 'balance' => 0, 'name' => 'Vardas1', 'surname' => 'Pavarde1', 'personal_id' => 37402030801],
    ['code' => rand(1000000, 10000000), 'account' => 'LT' . rand(10, 99) . '6300' . rand(100000000000, 999999999999), 'balance' => 0, 'name' => 'Vardas2', 'surname' => 'Pavarde2', 'personal_id' => 37402030802]
];

file_put_contents(__DIR__ . '/data', serialize($data));