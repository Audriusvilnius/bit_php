<?php
define('COLORS', [
    'black',
    'silver',
    'gray',
    'white',
    'maroon',
    'red',
    'purple',
    'fuchsia',
    'green',
    'lime',
    'olive',
    'yellow',
    'navy',
    'blue',
    'teal',
    'aqua',
    'aliceblue',
    'antiquewhite',
    'aqua',
    'aquamarine',
    'azure',
    'beige',
    'bisque',
    'black',
    'blanchedalmond',
    'blue',
    'blueviolet',
    'brown',
    'burlywood',
    'cadetblue',
    'chartreuse',
    'chocolate',
    'coral',
    'cornflowerblue',
    'cornsilk',
    'crimson',
    'cyan',
    'darkblue',
    'darkcyan',
    'darkgoldenrod',
    'darkgray',
    'darkgreen',
    'darkgrey',
    'darkkhaki',
    'darkmagenta',
    'darkolivegreen',
    'darkorang',
    'darkorchid',
    'darkred',
    'darksalmon',
    'darkseagreen',
    'darkslateblue',
    'darkslategray',
    'darkslategrey',
    'darkturquoise',
    'darkviolet',
    'deeppink',
    'deepskyblue',
    'dimgray',
    'dimgrey',
    'dodgerblue',
    'firebrick',
    'floralwhite',
    'forestgreen',
    'fuchsia',
    'gainsboro',
    'ghostwhite',
    'gold',
    'goldenrod',
    'gray',
    'green',
    'greenyellow',
    'grey',
    'honeydew',
    'hotpink',
    'indianred',
    'indigo',
    'ivory',
    'khaki',
    'lavender',
    'lavenderblush',
    'lawngreen',
    'lemonchiffon',
    'lightblue',
    'lightcoral',
    'lightcyan',
    'lightgoldenrodyellow',
    'lightgray',
    'lightgreen',
    'lightgrey',
    'lightpink',
    'lightsalmon',
    'lightseagreen',
    'lightskyblue',
    'lightslategray',
    'lightslategrey',
    'lightsteelblue',
    'lightyellow',
    'lime',
    'limegreen',
    'linen',
    'magenta',
    'maroon',
    'mediumaquamarine',
    'mediumblue',
    'mediumorchid',
    'mediumpurple',
    'mediumseagreen',
    'mediumslateblue',
    'mediumspringgreen',
    'mediumturquoise',
    'mediumvioletred',
    'midnightblue',
    'mintcream',
    'mistyrose',
    'moccasin',
    'navajowhite',
    'navy',
    'oldlace',
    'olive',
    'olivedrab',
    'orange',
    'orangered',
    'orchid',
    'palegoldenrod',
    'palegreen',
    'paleturquoise',
    'palevioletred',
    'papayawhip',
    'peachpuff',
    'peru',
    'pink',
    'plum',
    'powderblue',
    'purple',
    'red',
    'rosybrown',
    'royalblue',
    'saddlebrown',
    'salmon',
    'sandybrown',
    'seagreen',
    'seashell',
    'sienna',
    'silver',
    'skyblue',
    'slateblue',
    'slategray',
    'slategrey',
    'snow',
    'springgreen',
    'steelblue',
    'tan',
    'teal',
    'thistle',
    'tomato',
    'turquoise',
    'violet',
    'wheat',
    'white',
    'whitesmoke',
    'yellow',
    'yellowgreen'
]);

if ($_GET['color'] == 1) {
    $color = 'red';
} else {
    $color = 'black';
}
if ($_GET['color'] == 'ff1260') {
    $color = '#' . 'ff1260';
} elseif (in_array($_GET['color'] ?? '', COLORS)) {
    $color = $_GET['color'];
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <h1><?= $rez ?></h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pirma_uzd.css">
    <title>WEB mechanika (background edition)</title>
</head>

<header>
    <h1>
        7. WEB mechanika (background edition)
    </h1>
</header>

<body class="body" style="background-color: <?= $color ?>;">
    <hr>
    <h3>
        1. Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.
    </h3>
    <div class=" color">
        <a class="a" href="http://localhost/bit_php/nd/web/pirmas.php">Nuorada i save be kintamojo</a>
    </div>
    <div class="color">
        <a class="a" href="http://localhost/bit_php/nd/web/pirmas.php?color=1">Nuorada i save su GET kintamuoju</a>
    </div>
    <hr>
    <h3>
        2. Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1260) puslapio fono spalva pasidarytų tokios spalvos..
    </h3>
    <div class=" color">
        <a class="a" href="http://localhost/bit_php/nd/web/pirmas.php">Color reset</a>
    </div>
    <div class="color">
        <a class="a" href="http://localhost/bit_php/nd/web/pirmas.php?">Ivest spalva i URL nuoroda "color=ff1260"</a>
    </div>
    <hr>
    <h3>
        <p>3. Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje.</p>
    </h3>
    <div class="color">
        <form action="http://localhost/bit_php/nd/web/pirmas.php" method="GET">
            <input type="text" name="color">
            <button type="submit">COLORS</button>
        </form>
    </div>
    <hr>
    <h3>
        4. Sukurkite du puslapius lemon.php ir orange.php. Jų fonus nuspalvinkite atitinkamom spalvom. Į lemon.php puslapį įdėkite kodą, kuris naršyklę visada peradresuotų į puslapį orange.php. Pademonstruokite veikimą.
    </h3>
    <div class=" color">
        <a class="a" style="color: lemonchiffon;" href="http://localhost/bit_php/nd/web/lemon.php">LEMON.PHP</a>
    </div>
    <div class="color">
        <a class="a" style="color: orange;" href="http://localhost/bit_php/nd/web/orange.php"> ORANGE.PHP</a>
    </div>
    <hr>
</body>

</html>