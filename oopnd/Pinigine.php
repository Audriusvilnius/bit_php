<?php
class Pinigine
{
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    public static $suma;

    public function __construct()
    {
        $popieriniaiPinigai = 0;
        $metaliniaiPinigai = 0;
        $suma = 0;
    }
    public function ideti($kiekis)
    {
        if ($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
        } else {
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
        echo '<h2>Pinigu suma: ' . self::$suma . '</h2>';
    }
}