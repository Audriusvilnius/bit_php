<?php


class Vaikas extends Motina
{

    // public $hi = 'Hello';

    use Jonas, Agota {
        Jonas::myName insteadof Agota;
        Agota::myName as myLovesName;
    }

    // public function myName() : void
    // {
    //     echo '<h3>Vaikas<h3>';
    // }


}