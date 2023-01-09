<?php

namespace Bankas2;


class  Message 
{
    public static function add($text, $type){

        $_SESION['message']=['text'=>$text, 'type'=>$type];
    }

    public static function get(){
        $message =  $_SESION['message'] ?? null;
        unset($_SESION['message']);
        return $message;
    }



}