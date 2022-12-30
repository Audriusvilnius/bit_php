<?php

class Stikline
{
    private $turis;
    private $kiekis;
    static public $dif = 0;
    static public $netilpo = 0;
    public function __construct()
    {
        $this->turis = 200;
    }

    private function ispilti($kiekis)
    {

        if ($kiekis > $this->turis - self::$dif && ($this->turis - self::$dif) > 100) {
            self::$netilpo += ($kiekis - $this->turis);
            $kiekis = $this->turis - self::$dif;
            $this->turis = $kiekis;
            $this->ipilti($kiekis);
        } else {
            self::$netilpo += ($kiekis - $this->turis);
            $this->ipilti($kiekis);
        }
    }
    public function ipilti($kiekis)
    {
        $this->kiekis = $kiekis;
        if ($kiekis > $this->turis - self::$dif && ($this->turis - self::$dif) >= 100) {
            self::$netilpo += ($kiekis - $this->turis);
            $kiekis = $this->turis;
            $this->turis = $this->turis - self::$dif;
            self::$dif = 50;
            $this->ispilti($kiekis);
        } else {
            self::$netilpo += ($kiekis - $this->turis);
            echo '<h2> Stikline su turiu ' . $this->turis . ' uzpildyta.</h2>';
            echo '<h2> Netilpo i stiklines ' . self::$netilpo . ' .</h2>';
        }
    }
}