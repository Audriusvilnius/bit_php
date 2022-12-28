<?php

class Kibiras
{

    protected $akmuo;



    public function __construct()
    {
        $akmuo = 0;
    }

    public function prideti1Akmeni()
    {
        $this->akmuo += 1;
        echo '<h2>Pridetas akmuo: ' . $this->akmuo . '</h2>';
    }
    public function pridetiDaugAkmenu($kiekis)
    {
        $this->akmuo += $kiekis;
        echo '<h2>Prideta akmenu: ' . $this->akmuo . '</h2>';
    }
}