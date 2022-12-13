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

        function randArr(int $p, int $a , int $b, int $e):array
        {
        $Arr = [];
        $Arr1 = [];
            foreach(range(1, $p) as $_){
                foreach(range(1, $a) as $i2=>$_){
                    $Arr1[$i2] = rand($b, $e);
                }
            array_push($Arr, $Arr1);
            }
        return $Arr;
        }
    $ArrRand=[];
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
        $max=[0][0];
        foreach($ArrRand as $i=>$_){
            foreach($ArrRand as $y=>$_){
                if($max < $ArrRand[$i][$y]){
                $max = $ArrRand[$i][$y];
                }
            }
        }

    echo "\tMakimali masyvu elemento reiksme = $max";

    echo '<p>
c)	Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)</p>';

    $sum =[0];
    foreach ($ArrRand as $i => $_) {
        foreach ($ArrRand as $y => $_) {
            $sum[$y] += $ArrRand[$y][$i];
            
  
            }
        }
    print_r($sum);



    ?>
</body>

</html>

</html>