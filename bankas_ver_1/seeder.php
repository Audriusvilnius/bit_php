<?php

$data = [
    ['code' => 1234, 'account' => 'LT63000000' . rand(1000000, 10000000), 'balance' => 0, 'name' => 'Vardas', 'surname' => 'Pavarde', 'personal_id' => 12345],
    ['code' => 1235, 'account' => 'LT63000000' . rand(1000000, 10000000), 'balance' => 0, 'name' => 'Vardas1', 'surname' => 'Pavarde1', 'personal_id' => 12345],
    ['code' => 1236, 'account' => 'LT63000000' . rand(1000000, 10000000), 'balance' => 0, 'name' => 'Vardas2', 'surname' => 'Pavarde2', 'personal_id' => 12345]
];

file_put_contents(__DIR__ . '/data', serialize($data));