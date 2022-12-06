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

    use function PHPSTORM_META\map;

    $pirmas = 'antras';
    $antras = 'kitas';
    $kitas = 'Bla bla';
    echo $ $$pirmas;

    $mas = [8, 7, 9, 0, 1];
    echo '<br>';
    echo '<pre>';
    echo '<hr>';

    // usort($mas, fn($a, $b) => $a <=> $b);

    usort($mas, function ($a, $b) {
        if ($a > $b) {
            return 1;
        }
        if ($a < $b) {
            return -1;
        }
        return 0;
    });


    print_r($mas);

    $vienas = 5;


    $rezultatas = 1 == $vienas ? 'Yes' : (2 == $vienas ? 'Maybe' : 'No');

    // 3 == $vienas ? f2() : f1();

    echo '<br>';

    echo $rezultatas;

    echo '<br>';
    var_dump(isset($i)); // gražina FALSE
    $i = 1;
    var_dump(isset($i)); // gražina TRUE
    // $i=null; 
    var_dump(isset($i)); //gražina FALSE

    var_dump($i ?? 8);

    $z = 1;

    if ($z == 0) {
        echo 'z equals 0';
    } else if ($z == 2) {
        echo 'z equals 2';
    } else if ($z == 3) {
        echo 'z equals 3';
    } else {
        echo 'z equals any';
    }


    // switch - teisingai
    switch ($z) {
        case 0:
            echo 'z equals 0';
        case 1:
            echo 'z equals 2';
        case 2:
            echo 'z equals 3';
        case 3:
            echo 'z equals any';
    }
    echo '<hr>';
    //s m l xl\

    $size = 'm';
    echo 'turim' . $size;
    echo '<br>';
    if ($size == 's') {
        echo '<br> tikrinamas s';
    }
    if ($size == 'm' || $size = 's') {
        echo '<br> tikrinamas m';
    }
    if ($size == 'l' || $size = 'm' || $size = 's') {
        echo '<br> tikrinamas l';
    }
    if ($size == 'xl' || $size = 'l' || $size = 'm' || $size = 's') {
        echo '<br> tikrinamas xl';
    }

    echo '<br>';
    echo '<hr>';
    // su switch:

    switch ($size) {
        case 's':
            echo '<br> tikrinamas s';
        case 'm':
            echo '<br> tikrinamas m';
        case 'l':
            echo '<br> tikrinamas l';
        case 'xl':
            echo '<br> tikrinamas xl';
    };

    echo '<br>';
    echo '<hr>';
    $print = match ($z) {
        0 => 'z equals 0',
        1 => 'z equals 2',
        2 => 'z equals 3',
        default => 'z equals any',
    };
    echo $print;

    echo '<br>';
    echo '<hr>';

    $kintamasis1 = rand(0, 4);
    $kintamasis2 = rand(0, 4);
    echo "$kintamasis1 ir $kintamasis1";
    echo '<br>';

    if (!($kintamasis1 * $kintamasis2)) {
        echo 'Dalyba negalima';
    } elseif ($kintamasis1 > $kintamasis2) {
        echo round($kintamasis1 / $kintamasis2, 2);
    } else {
        echo round($kintamasis2 / $kintamasis1, 2);
    }
    echo '<hr>';
    $str = 'AČiŪ';
    echo $str;
    echo '<br>';

    echo 'simbolio ilgis nevertinant lietuvybes: ' . strlen($str);

    echo '<br>';
    echo 'simbolio ilgis vertinant lietuvybes: ' . mb_strlen($str);


    ?>
</body>

</html>