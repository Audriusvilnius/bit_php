<?php
class KibirasDu
{
    private $akmuo;

    private static $akmenusuma = 0;

    public static function akmenusuma(): void
    {
        echo '<h2> Pririnkta akmenu kibiruose: ' . self::$akmenusuma;
    }

    public function __construct()
    {
        $akmuo = 0;
    }

    public function pridetakmeni(): void
    {
        $this->akmuo++;
        echo '<h2> Pridetas akmuo' . $this->akmuo;
        self::$akmenusuma++;
    }
    public function pridetakmenu($kiekis): void
    {
        $this->akmuo += $kiekis;
        echo '<h2> Prideta akmenu' . $this->akmuo;
        self::$akmenusuma += $kiekis;
    }


    public function __get($name)
    {
    }
}