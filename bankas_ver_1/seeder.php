<?php

$data = [
    ['code' => 123, 'accaount' => 'LT63000000' . rand(1000000, 10000000), 'balance' => 0, 'name' => 'Vardas', 'surname' => 'Pavarde', 'personal_id' => 12345],
    ['code' => 123, 'accaount' => 'LT63000000' . rand(1000000, 10000000), 'balance' => 0, 'name' => 'Vardas1', 'surname' => 'Pavarde1', 'personal_id' => 12345],
    ['code' => 123, 'accaount' => 'LT63000000' . rand(1000000, 10000000), 'balance' => 0, 'name' => 'Vardas2', 'surname' => 'Pavarde2', 'personal_id' => 12345]
];

file_put_contents(__DIR__ . '/data', serialize($data));