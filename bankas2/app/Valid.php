<?php

namespace Bankas2;

class Valid
{
    public static function check_id($userData){
   
if ($userData['name'] != '' && $userData['surname'] != '' && $userData['personal_id']) {
    if (!preg_match('/\D([A-Za-z]{2})/', $userData['name']) || preg_match('/\d/', $userData['name'])) {
        header('Location: http://localhost/bit_php/bankas_ver_1/userdatach.php?name=' . $userData['name']);
    } else {
        $name = $_POST['name'];
        if (!preg_match('/\D([A-Za-z]{2})/', $userData['surname']) || preg_match('/\d/', $userData['surname'])) {
            header('Location: http://localhost/bit_php/bankas_ver_1/userdatach.php?surname=' . $userData['surname']);
        } else {
            $surname = $_POST['surname'];
            if (!preg_match('/^([1-6]{1})([0-9]{2})([0-1]{1})([0-2]{1})([0-3]{1})([0-9]{1})([0-9999]{4})$/', $_POST['personal_id'])) {
                header('Location: http://localhost/bit_php/bankas_ver_1/userdatach.php?id=' . $_POST['personal_id']);
            } else
    
}

    }}}}