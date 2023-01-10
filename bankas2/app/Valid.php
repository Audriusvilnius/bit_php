<?php

namespace Bankas2;
use Bankas2\App;


class Valid
{
    public static function check_id($userData)
    {
  if ($userData['name'] == '' || $userData['surname'] == '' || $userData['personal_id']=='') {
      if($userData['name'] == ''){$error = 'Name';}
      if($userData['surname'] == ''){$error = 'Surname';}
      if($userData['personal_id'] == ''){$error = 'Personal-ID';}
    return App::redirect('customers/error/' .$error);}
    
    if ($userData['name'] != '' || $userData['surname'] != '' || $userData['personal_id']!=''){
    if (!preg_match('/\D([A-Za-z]{2})/', $userData['name']) || preg_match('/\d/', $userData['name'])) {
      $error = "Name-format";
    return App::redirect('customers/error/' .$error);}
  
    if (!preg_match('/\D([A-Za-z]{2})/', $userData['surname']) || preg_match('/\d/', $userData['surname'])){ 
    $error = "Surname-format";
    return App::redirect('customers/error/' .$error);}

  if (!preg_match('/^([1-6]{1})([0-9]{2})([0-1]{1})([0-2]{1})([0-3]{1})([0-9]{1})([0-9999]{4})$/', $userData['personal_id'])){
    $error = "ID-format";
    return App::redirect('customers/error/' .$error);}

} return $userData;

} 
}