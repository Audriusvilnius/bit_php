<?php

class Kibiras
{

    private $akmuo;



    public function __construct()
    {
        $akmuo = 0;
    }

    public function prideti1Akmeni()
    {
        $this->akmuo++;
        echo '<h2>Pridetas akmuo: ' . $this->akmuo . '</h2>';
    }
    public function pridetiDaugAkmenu($kiekis)
    {
        $this->akmuo += $kiekis;
        echo '<h2>Prideta akmenu: ' . $this->akmuo . '</h2>';
    }
}