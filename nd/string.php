<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<p></p>

<body>
    <?php

    echo '<p>1.	Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.</p>';

    $vienas = 'Jonas Jonaitis';
    $antras = 'Petras Petraitis';
    if (strlen($vienas) > strlen($antras)) {
        echo $vienas;
    } else  echo $antras;

    echo '<hr>';

    echo '<p>2.	Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.</p>';

    echo $vardas = 'Jomas';
    echo $pavaarde = 'Maverikas';

    echo strtoupper($vardas);
    echo '<br>';
    echo strtolower($pavaarde);


    echo '<hr>';

    echo '<p>3.	Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.</p>';
    echo $vardas = 'Jomas';
    echo $pavaarde = 'Maverikas';
    echo '<br>';
    echo $traecias = $vardas[0] . '.' . $pavaarde[0];
    echo '<hr>';
    echo '<p>4.	Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.</p>';

    echo $vardas = 'Jomas';
    echo '<br>';
    echo $pavaarde = 'Maverikas';
    echo '<br>';
    echo $traecias = substr($vardas, -3) . substr($pavaarde, -3);

    echo '<hr>';
    echo '<p>5.	Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.</p>';

    echo $kintamasis = 'An American in Paris';
    echo '<br>';
    $kintamasis = str_replace('a', '*', $kintamasis);
    echo $kintamasis = str_replace('A', '*', $kintamasis);
    echo '<br>';
    $kintamasis = 'An American in Paris';
    echo $kintamasis = str_ireplace('A', '*', $kintamasis);

    echo '<hr>';
    echo '<p>6.	Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.</p>';

    echo $kintamasis = 'An American in Paris';
    echo '<br>';

    echo $sum = substr_count($kintamasis, 'a') + substr_count($kintamasis, 'A');


    echo '<hr>';
    echo '<p>7.	Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany\'s”, “2001: A Space Odyssey” ir “It\'s a Wonderful Life”.</p>';

    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    echo '<br>';
    echo $pirmas = 'An American in Paris';
    echo '<br>';
    echo $antas = 'Breakfast at Tiffany';
    echo '<br>';
    echo $trecias = '2001: A Space Odyssey';
    echo '<br>';
    echo $ketvirtas = 'It\'s a Wonderful Life';

    echo '<br>';
    echo $ats = preg_replace('/[aeiou]/i', '', $pirmas);
    echo '<br>';
    echo $ats = preg_replace('/[aeiou]/i', '', $antas);
    echo '<br>';
    echo $ats = preg_replace('/[aeiou]/i', '', $trecias);
    echo '<br>';
    echo $ats = preg_replace('/[aeiou]/i', '', $ketvirtas);


    echo '<hr>';
    echo '<p>8.	Stringe, kurį generuoja toks kodas: \'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope\'; Surasti ir atspausdinti epizodo numerį.</p>';

    echo $movie = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';
    preg_match('/\d/', $movie, $m);
    echo '<pre>';
    print_r($m[0]);
    echo '<br>';


    echo '<hr>';
    echo '<p>9.	Suskaičiuoti kiek stringe “Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.</p>';

    $string1 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
    echo $str = mb_strlen($string1);
    
    $strl = explode(" ",$string1);
    print_r($strl);
    $max = 0;
    foreach($strl as $index => $value){
        if (mb_strlen($value) <= 5){
        $max++;
        }
    }
    echo $max;

$string1 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
    echo $str = mb_strlen($string1);
$strl = explode(" ",$string1);
    print_r($strl);
    $max = 0;
    foreach($strl as $index => $value){
        if (mb_strlen($value) <= 5){
        $max++;
        }
    }
    echo $max;

    
echo '<hr>';
echo '<p>10.	Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.</p>';

    
    
    echo '<pre>';
    echo '</pre>';


    echo '<hr>';
    echo '<br>';

    ?>
</body>

</html>