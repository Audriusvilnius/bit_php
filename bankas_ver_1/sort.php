<?php

function sortas($a, $b): string
{
    return $a['surname'] > $b['surname'];
};
if (isset($_GET['sort'])) {
    $search = unserialize(file_get_contents(__DIR__ . '/data'));
    $sort = $_GET['sort'];
    usort($search, 'sortas');
}
// echo $_GET;
// print_r($_GET);
//echo $sort;

// echo
// $search;


file_put_contents(__DIR__ . '/data', serialize($search));
header('Location: http://localhost/bit_php/bankas_ver_1/allcustomers.php?name');
die;