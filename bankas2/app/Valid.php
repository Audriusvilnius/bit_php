<?php

namespace Bankas2;
use Bankas2\App;


class Valid
{
    public static function check_id($userData)
    {
   echo '<pre>';     
  if ($userData['name'] != '' && $userData['surname'] != '' && $userData['personal_id']!='') {
      return App::redirect('customers/error/' . $error);
    if (!preg_match('/\D([A-Za-z]{2})/', $userData['name']) || preg_match('/\d/', $userData['name'])) {
    $error = 1;
    echo '<br>';
    echo 'Klaida - name';
    print_r($userData);

  } else $name = $userData['name'];
    echo $name;
  if (!preg_match('/\D([A-Za-z]{2})/', $userData['surname']) || preg_match('/\d/', $userData['surname'])){ 
    echo '<br>';
    echo 'Klaida - surname';
    print_r($userData);

   } else $surname = $userData['surname'];
   echo $surname;
  if (!preg_match('/^([1-6]{1})([0-9]{2})([0-1]{1})([0-2]{1})([0-3]{1})([0-9]{1})([0-9999]{4})$/', $userData['personal_id'])){
    echo '<br>';
    echo 'Klaida - personal_id';
    print_r($userData);
    
  }else $personal_id = $userData['personal_id'];
  echo $personal_id;
  
  
  echo 'Praejo';print_r($userData);}

 

return $userData;
}
}