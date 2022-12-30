<?php

require __DIR__ . '/Stikline.php';
require __DIR__ . '/KibirasNepo1.php';
require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/Kibiras.php';
require __DIR__ . '/KibirasDu.php';
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

KibirasDu::akmenusuma();

$akmuo2 = new KibirasDu();
$akmuo3 = new KibirasDu();

$akmuo2->pridetakmeni();
$akmuo2->pridetakmenu(8);

KibirasDu::akmenusuma();

$akmuo3->pridetakmenu(21);

KibirasDu::akmenusuma();

echo '<hr>';
echo '<h2>4.	(EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3. Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3. KibirasNePo1 turi naudoti visus tėvinius metodus, bet metodas Prideti1Akmeni() turi pridėti ne vieną o atsitiktinį akmenų kiekį nuo 2 iki 5. Sukurkite KibirasNePo1 objektą ir pademonstruokite veikimą.
</h2>';

$paveld = new KibirasNePo1();
$ispirmomet = new kibiras3();

$paveld->Prideti1Akmeni();
$paveld->Prideti1Akmeni();
$paveld->Prideti1Akmeni();

$ispirmomet->pridetiDaugAkmenu(8);
$ispirmomet->Prideti1Akmeni();
$paveld->Prideti1Akmeni();

echo '<hr>';
echo '<h2>6.	Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę.
</h2>';


$pilam = new Stikline();


$pilam->ipilti(549);
$pilam->ipilti(700);

echo '<pre>';
var_dump($pilam);