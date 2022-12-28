<?php

require __DIR__ . '/Kibiras.php';
require __DIR__ . '/Pinigine.php';

echo '<h2>1.	Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.
</h2>';


$akmuo = new Kibiras();
$akmuo->prideti1Akmeni();
$akmuo->pridetiDaugAkmenu(8);
$akmuo->prideti1Akmeni();




echo '<hr>';
echo '<h2>2.	Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.
</h2>';

$pin1 = new Pinigine();

$pin1->ideti(3);
$pin1->ideti(4);
$pin1->ideti(1);

$pin1->skaiciuoti();


$pin1->ideti(3);
$pin1->ideti(4);
$pin1->ideti(1);

$pin1->skaiciuoti();

echo '<hr>';
echo '<h2>3.	(STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą.
</h2>';