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
    $rez = [];

    $mas = array_map(fn () => rand(5, 25), range(1, 30));



    $rez['a'] = 0;
    foreach ($mas as $val) {
        if ($val > 10) {
            $rez['a']++;
        }
    }

    $rez['b value'] = $mas[0];
    $rez['b index'] = [0];

    foreach ($mas as $index => $val) {
        if ($val > $rez['b value']) {
            $rez['b value'] = $val;
            $rez['b index'] = [];
            // $rez['b index'][] = $index;
        }
        if ($val == $rez['b value']) {
            $rez['b index'][] = $index;
        }
    }

    $rez['c'] = 0;
    foreach ($mas as $val) {
        if ($val % 2 != 0) {
            $rez['c'] += $val;
        }
    }

    $rez['d'] = array_map(fn ($a, $b) => $a - $b, $mas, array_keys($mas));

    foreach (range(1, 10) as $_) {
        $mas[] = rand(5, 25);
    }

    foreach ($mas as $index => $val) {
        $rez['f'][$index % 2][] = $val;
    }

    foreach ($mas as &$val) {
        $val = $val > 15 ? 0 : $val;
    }


    foreach ($mas as $index => $val) {
        if ($val > 10) {
            $rez['h'] = $index;
            break;
        }
    }

    foreach ($mas as $index => &$val) {
        if ($index % 2 == 0) {
            unset($mas[$index]);
        }
    }

    $mas = array_values($mas);

    print_r($rez);
    print_r($mas);


    echo '<hr>';
    echo '<p>
    
    3.	Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
    
    
    </p>';

    foreach (range(1, 200) as $index => $char) {
        $a = rand(1, 4);
        if ($a == 1) {
            $char = 'A';
            $countA++;
        }
        if ($a == 2) {
            $char = 'B';
            $countB++;
        }
        if ($a == 3) {
            $char = 'C';
            $countC++;
        }
        if ($a == 4) {
            $char = 'D';
            $countD++;
        }
        $mas[$index] = $char;
    }
    //print_r($mas) ;

    echo 'A: ' . $countA;
    echo '<br>';
    echo 'B: ' . $countB;
    echo '<br>';
    echo 'C: ' . $countC;
    echo '<br>';
    echo 'D: ' . $countD;
    echo '<br>';



    echo '<hr><p>
    4.	Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
    </p>';

    sort($mas);
    print_r($mas);



    echo '<hr><p>
   5.	Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
    </p>';


    function mass(int $n): array
    {
        foreach (range(1, $n) as $index => $char) {
            $input = ['A', 'B', 'C', 'D'];
            $rand_keys = array_rand($input);
            $char =  $input[$rand_keys];
            $mas[$index] = $char;
        }
        return $mas;
    }

    $n = 200;
    $arrayNew1 = mass($n);
    $arrayNew2 = mass($n);
    $arrayNew3 = mass($n);

    foreach (range(1, 200) as $i => $newArr) {
        $Arr[$i] = $arrayNew1[$i] . $arrayNew2[$i] . $arrayNew3[$i];
    }
    print_r($Arr);

    echo 'Pasikartojancios reiksme:';
    $ArrCount = array_count_values($Arr);
    print_r($ArrCount);


    echo 'Unikalios reiksme:';
    $ArrUnic = (array_flip(array_flip($Arr)));
    sort($ArrUnic);
    print_r($ArrUnic);

    echo 'Po viena:';
    $OneArr = [];
    foreach ($ArrCount as $key => $val) {
        if ($ArrCount[$key] == 1) {
            $One .= " $key\n";
            array_push($OneArr, $key);
        }
    }
    print_r($OneArr);
    print_r($One);


    echo '<hr><p>
   6.	Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
    </p>';


    function randArr(int $b, int $e, int $l): array
    {
        $newRand = [];
        $Rand = [];
        foreach (range(1, $l) as $i => $ArrRand) {
            array_push($Rand, rand($b, $e));
        }
        $newRand = (array_flip(array_flip($Rand)));
        sort($newRand);
        if (count($newRand) < $l - 1) {
            randArr($b, $e, $l);
            // echo'<br>';
            //echo count($newRand);
        }
        //echo '<hr>';
        //echo count($newRand);
        return $Rand;
    }


    $Arr1 = [];
    $Arr2 = [];
    $Arr3 = [];

    $begin = 100;
    $end = 999;
    $len = 100;
    $Arr1 = randArr($begin, $end, $len);
    $Arr2 = randArr($begin, $end, $len,);
    print_r($Arr1);
    print_r($Arr2);




    echo '7.	Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.';

    $Arr3 = (array_diff($Arr2, $Arr1));
    print_r($Arr3);

    $r =  count((array_diff($Arr2, $Arr1)));
    echo $r;
    // while(count($Arr2) != $r ){
    //     if ($r !== count($Arr2)){
    //         echo count($Arr2);
    //         echo'<br>';
    //         $Arr2 = randArr($begin, $end, $len);
    //         echo $r=  count((array_diff($Arr2, $Arr1)));
    // }
    // }  //echo $r; 

    echo '<hr>';


    echo '<hr><p>
8.	Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
    </p>';


    $Arr3 = (array_intersect($Arr2, $Arr1));
    print_r($Arr3);

    echo '<hr><p>
9.	Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
    </p>';





    echo '<hr><p>
10.	Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
    </p>';

        function ArrC(int $pirmas, int $antras, int $ilgis):array
        {
            $RetArr = [];
            $first = rand($pirmas, $antras);
            $second = rand($pirmas, $antras);
        echo "Pirmas skaicius: $first";
        echo '<br>';
        echo "Antas skaicius: $second";
        echo '<br>';
            array_push($RetArr, $first);
            array_push($RetArr, $second);
            foreach(range(3,$ilgis) as $i=>$_){
            $first = $RetArr[$i];
            $second = $RetArr[$i+1];
                $aftSec = $first + $second;
                array_push($RetArr, $aftSec);   
            }
            return $RetArr;
        }
        $ArrRez=[];
        $pirm = 5; 
        $antr = 25;
        $il = 10;
        $ArrRez = ArrC($pirm, $antr, $il);
        
        print_r($ArrRez);
    ?>
</body>

</html>

</html>