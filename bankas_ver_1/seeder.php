<?php

$data = [
    ['code' => rand(1000000, 10000000), 'account' => 'LT' . rand(10, 99) . '6300' . rand(100000000000, 999999999999), 'balance' => 0, 'name' => 'Jonas', 'surname' => 'Jonaitis', 'personal_id' => 38802030801],
    ['code' => rand(1000000, 10000000), 'account' => 'LT' . rand(10, 99) . '6300' . rand(100000000000, 999999999999), 'balance' => 0, 'name' => 'Petras', 'surname' => 'Petraitis', 'personal_id' => 38902030802],
    ['code' => rand(1000000, 10000000), 'account' => 'LT' . rand(10, 99) . '6300' . rand(100000000000, 999999999999), 'balance' => 0, 'name' => 'Algis', 'surname' => 'Algaitis', 'personal_id' => 39102030803]
];

file_put_contents(__DIR__ . '/data', serialize($data));