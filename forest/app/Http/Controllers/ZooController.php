<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZooController extends Controller
{
    public function enter($id){
        return 'Labas is kontrolerio Nr.:'.$id;
    }
}