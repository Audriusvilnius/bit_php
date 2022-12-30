<?php
class Pinigine
{
    private $popieriniaiPinigai;
    public static $poppin = 0;
    public static $popmet = 0;
    private $metaliniaiPinigai;
    private static $suma = 0;

    public function __construct()
    {
        $popieriniaiPinigai = 0;
        $metaliniaiPinigai = 0;
    }
    public function ideti($kiekis)
    {
        if ($kiekis > 2) {
            self::$poppin++;
            $this->popieriniaiPinigai += $kiekis;
        } else {
            self::$popmet++;
            $this->metaliniaiPinigai += $kiekis;
        }
    }
    public function skaiciuoti()
    {
        self::$suma = $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        echo '<h2>Popieriniu pinigu: ' . $this->popieriniaiPinigai . '</h2>';
        echo '<br>';
        echo '<h2>Metaliniu pinigu: ' . $this->metaliniaiPinigai . '</h2>';
        echo '<br>';
        echo
        '<h2>Pinigu suma: ' . self::$suma . '</h2>';
        echo '<h2>Pinig pop: ' . self::$poppin . '</h2>';
        echo '<h2>Pinig met: ' . self::$popmet . '</h2>';
    }
}