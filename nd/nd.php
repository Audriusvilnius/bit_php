<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo '<pre>';
    echo '<p>1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)"</p>';
    echo '<hr>';
    $vardas = 'Audrius';
    echo 'Mano vardas: ' . $vardas;
    echo '<br>';
    $pavade = 'Ivko';
    echo 'Mano pavarde: ' . $pavade;
    echo '<br>';
    $year = '2000';

    echo    "Gimino metai: " . $year;
    echo '<br>';
    $mounth = 2;
    echo    "Gimino menuo: " . $mounth;
    echo '<br>';
    $day = 3;
    echo    "Gimino diena: " . $day;
    echo '<br>';
    //echo 'Siandien yra: '.$today = date("F j, Y, g:i a");
    $m = date('d'); // menuo
    $d = date('M'); // diena
    $y = date('Y'); // metai
    echo "Šiandien: $m-$d-$y";
    echo '<br>';
    echo 'Tavo amzius :' . $y - $year . ' metai ' . $m - $mounth . ' menesiai ';


    echo '<br>';
    echo '<hr>';

    echo '<p>2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. </p>';

    $kintamasis1 = rand(0, 4);
    $kintamasis2 = rand(0, 4);
    echo 'Skaicius pirmas: ' . $kintamasis1;
    echo '<br>';
    echo 'Skaicius Antras: ' . $kintamasis2;

    echo '<br>';

    if (!($kintamasis1 * $kintamasis2)) {
        echo 'Dalyba negalima';
    } elseif ($kintamasis1 > $kintamasis2) {
        echo round($kintamasis1 / $kintamasis2, 2);
    } else {
        echo round($kintamasis2 / $kintamasis1, 2);
    }
    echo '<hr>';

    echo '<p> 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. </p>';


    $pirmas = rand(0, 25);
    $antras = rand(0, 25);
    $trecias = rand(0, 25);
    echo 'Kintamasis pirmas: ' . $pirmas . ';';
    echo '<br>';
    echo 'Kintamasis antras: ' . $antras . ';';
    echo '<br>';
    echo 'Kintamasis trecias: ' . $trecias . ';';
    echo '<br>';
    echo 'Skaiciu vitutine reiksme yra: ' . round(($pirmas + $antras + $trecias) / 3, 2);



    echo '<hr>';
    echo '<p> 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite rand() funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų<p>';
    $pirmas = rand(0, 10);
    $antras = rand(0, 10);
    $trecias = rand(0, 10);
    echo 'Kintamasis pirmas: ' . $pirmas . ';';
    echo '<br>';
    echo 'Kintamasis antras: ' . $antras . ';';
    echo '<br>';
    echo 'Kintamasis trecias: ' . $trecias . ';';
    echo '<br>';

    if ((($pirmas + $antras) > $trecias) && (($pirmas + $trecias) > $antras) && (($antras + $trecias) > $pirmas)) {
        echo '<br>';
        echo 'Trikampism imanomas.';
    } else {
        echo '<br>';
        echo 'Trikampis neimanomas. ';
    }
    echo '<hr>';
    //AB+BC>AC ir AB+AC>BC ir BC+AC>AB
    echo '<p>5.	Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).</p>';

    $pirmas = rand(0, 2);
    $antras = rand(0, 2);
    $trecias = rand(0, 2);
    $ketvirtas = rand(0, 2);
    echo 'Kintamasis pirmas: ' . $pirmas . ';';
    echo '<br>';
    echo 'Kintamasis antras: ' . $antras . ';';
    echo '<br>';
    echo 'Kintamasis trecias: ' . $trecias . ';';
    echo '<br>';
    echo 'Kintamasis ketvirtas: ' . $ketvirtas . ';';
    echo '<br>';
    echo '<br>';
    echo 'Nuliu yra '.substr_count("$pirmas $antras $trecias $ketvirtas", "0").' vnt.';
    echo '<br>';
    echo 'Vienetu yra '.substr_count("$pirmas $antras $trecias $ketvirtas", "1") . ' vnt.';
    echo '<br>';
    echo 'Dvejatu yra '.substr_count("$pirmas $antras $trecias $ketvirtas", "2") . ' vnt.';
    echo '<br>';



    echo '<hr>';
    print_r('<p>6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3><p>');

    $h3 = rand(1, 6);
    echo "<h3>$h3</h3>";
    echo '<hr>';
    
    echo '<p>7.	Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. </p>';
    $s1 = rand(-10, 10);
    $s2 = rand(-10, 10);
    $s3 = rand(-10, 10);
    if ($s1 < 0){
        <style></style>
    }
    
    echo '<hr>';

    

    
    ?>
    <p style="color: red;">3</p>
</body>

</html>