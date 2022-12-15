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
    $mas = [];
    $rez = [];

    foreach (range(1, 10) as $_) {
        $small = [];
        foreach (range(1, 5) as $_) {
            $small[] = rand(5, 25);
        }
        $mas[] = $small;
    }

    $rez['a'] = 0;

    foreach ($mas as $small) {
        foreach ($small as $val) {
            $rez['a'] += $val > 10 ? 1 : 0;
        }
    }

    $rez['b'] = $mas[0][0];

    foreach ($mas as $small) {
        foreach ($small as $val) {
            $rez['b'] = max($rez['b'], $val);
        }
    }

    $rez['c'] = [];
    echo '<hr>';
    foreach ($mas as $small) {
        foreach ($small as $index => $val) {
            $rez['c'][$index] = ($rez['c'][$index] ?? 0) + $val;
        }
    }

    foreach ($mas as &$small) {
        foreach (range(1, 2) as $_) {
            $small[] = rand(5, 25);
        }
    }

    $rez['d'] = array_map(fn ($v) => array_sum($v), $mas);


    print_r($mas);
    print_r($rez);

    echo '<pre>';

    echo '<hr>';
    echo '<p>
1.	Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
    </p>';

    function randArr(int $p, int $a, int $b, int $e): array
    {
        $Arr = [];
        $Arr1 = [];
        foreach (range(1, $p) as $_) {
            foreach (range(1, $a) as $i2 => $_) {
                $Arr1[$i2] = rand($b, $e);
            }
            array_push($Arr, $Arr1);
        }
        return $Arr;
    }
    $ArrRand = [];
    $pirmas = 10;
    $antras = 5;
    $elemenBeg = 5;
    $elemenEnd = 25;

    $ArrRand = randArr($pirmas, $antras, $elemenBeg, $elemenEnd);
    print_r($ArrRand);

    echo '<hr>';
    echo '<p>
2.	Naudodamiesi 1 uždavinio masyvu:
a)	Suskaičiuokite kiek masyve yra elementų didesnių už 10;
b)	Raskite didžiausio elemento reikšmę;
c)	Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
d)	Visus antro lygio masyvus “pailginkite” iki 7 elementų
e)	Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
    </p>';

    echo '<p>
    a)	Suskaičiuokite kiek masyve yra elementų didesnių už 10;</p>';

    $did = 0;
    foreach ($ArrRand as $i => $_) {
        foreach ($ArrRand as $y => $_) {
            if (10 < $ArrRand[$i][$y]) {
                $did++;
            }
        }
    }
    echo "\tDaugiau uz 10 yra : $did reiksmiu.";

    echo '<p>
b)	Raskite didžiausio elemento reikšmę ;</p>';
    $max = [0][0];
    foreach ($ArrRand as $i => $_) {
        foreach ($ArrRand as $y => $_) {
            if ($max < $ArrRand[$i][$y]) {
                $max = $ArrRand[$i][$y];
            }
        }
    }

    echo "\tMakimali masyvu elemento reiksme = $max";

    echo '<p>
c)	Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)</p>';

    // $re3['d'] = array_map(fn ($ArrRand) => array_sum($ArrRand), $mas);
    // print_r($ArrRand);
    // print_r($re3);

    $sum['Sum'] = [];

    foreach ($ArrRand as $i => $antras) {
        foreach ($antras as $y => $_) {
            $sum[$i]  += $antras[$y];
        }
    }
    //print_r($sum);
    print_r($sum);

    echo '<p>
    d)	Visus antro lygio masyvus “pailginkite” iki 7 elementų</p>';

    $Arrilgesnis = [];
    $ilginam = 7;
    $Arrilgesnis = randArr($pirmas, $ilginam, $elemenBeg, $elemenEnd);
    print_r($Arrilgesnis);

    echo '<p>
    e)	Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai </p>';


    echo '<hr>';


    echo '<p>
3.	Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm). </p>';

    function getRandomString(int $length): string
    {
        // $stringSpace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $stringSpace = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pieces = [];
        $max = mb_strlen($stringSpace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $pieces[] = $stringSpace[random_int(0, $max)];
        }
        return implode('', $pieces);
    }
    $stringLenght = 1;
    $darvienas = [];
    $darpirmas = [];

    foreach (range(1, 10) as $i => $pirmas) {
        $lent = rand(2, 20);
        foreach (range(2, $lent) as $y => $kitas) {
            $darpirmas[$y] = getRandomString($stringLenght);
        }
        sort($darpirmas);
        array_push($darvienas, $darpirmas);
    }
    print_r($darvienas);

    echo '<hr>';
    echo '<p>
4.	Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje. </p>';
    $min = [0];
    foreach ($darvienas as $y => $an) {
        foreach ($an as $i => $k) {
            if ($k == 'K') {
                echo 'K' . $i . $y . '<br>';
                $i = 'K' . $i;
                array_unshift($darvienas, $an);
                array_pop($darvienas);
            }
        }
    }
    print_r($darvienas);
    echo '<hr>';
    echo '<p>
5.	Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.  </p>';

    function id(int $id, int $p, int $id_qty): array
    {
        $id_arr = [];
        foreach (range(1, $id_qty) as $key => $id_new) {
            $count = 0;
            $id_arr[$key] = rand(1, $id);
            $count = count($id_arr);
            $id_arr = (array_flip(array_flip($id_arr)));
            if (count($id_arr) !== $count) {
                id($id, $p, $id_qty);
            }
            sort($id_arr);
        }
        return $id_arr;
    }

    function place($a)
    {
        $z[] = rand(0, 100);
        return [$a => $z];
    }


    function getName(int $length): string
    {
        // $stringSpace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $stringSpace = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pieces = [];
        $max = mb_strlen($stringSpace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $pieces[] = $stringSpace[random_int(0, $max)];
        }
        return implode($pieces);
    }

    function na(array $id):array
    {
        $n = getName(rand(5, 15));
        //$s = getName(rand(5, 15));
        //return [$id, $n, $s];
        return [$id, $n];
    }
    function su(array $a)
    {
        $s = getName(rand(5, 15));
        return [$a, $s];
    }


    $user_id = [];
    $id_place_arr = [];
    $id_name_place_arr = [];
    $id_name_surname_place_arr = [];
    $id_qty = 30;
    $id_nr_lenth = 1000000;
    $place_row = 100;

    $user_id = id($id_nr_lenth, $place_row, $id_qty);
    //print_r($user_id);
    $id_place_arr = array_map('place', $user_id);

    //sort($place_arr); 
    print_r($id_place_arr);
    echo ('----------');
    foreach ($id_place_arr as $n) {
        foreach ($n as $y => $new) {
            // print_r($n[$y]);

            $id_name_place_arr[$y] = array_map('na', $new);
        }
    }
    print_r($id_name_place_arr);

    foreach ($id_name_place_arr as $z) {
        foreach ($z as $y => $nz) {
            // print_r($z[$y]);
            print_r($y);
            $id_name_surname_place_arr[] = array_map('su', $nz);
        }
    }

    // print_r($id_name_surname_place_arr);





    ?>
</body>

</html>

</html>