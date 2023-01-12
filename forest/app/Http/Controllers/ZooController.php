<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZooController extends Controller
{
    public function enter(Request $request, $id){

//http://localhost/bit_php/forest/public/zoo/enter/88?v=aaa
//http://localhost/bit_php/forest/public/zoo/enter/88?v=aaa&b=uuuu

        return 'Versija '.$request->v.' ' .$request->b.'Labas is kontrolerio Nr.:'.$id;
    }
}