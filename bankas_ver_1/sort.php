<?php
function sortas($a, $b): string
{
    return $a['surname'] > $b['surname'];
};
if (isset($_GET['sort'])) {
    $search = unserialize(file_get_contents(__DIR__ . '/data'));
}
usort($search, 'sortas');
//$users['balance'] = number_format($number, 2, '.', '');
file_put_contents(__DIR__ . '/data', serialize($search));
header('Location: http://localhost/bit_php/bankas_ver_1/allcustomers.php?name');
die;