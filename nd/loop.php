<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">
    <title>Loop</title>
</head>


<body>
    <?php
    echo '<p>1.	Naršyklėje nupieškite linija iš 400 “*”. 
a)	Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
b)	Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
</p>';


    echo '<br>';


    foreach (range(1, 50) as $val1) {
        foreach (range(1, 5) as $i) {
            $i = '*';
            $s = '<div class="zvaigz">' . $i++;
        }

        echo $val1 = '<div class="conteiner">' . $s . '</div>' . '</div>';
        //echo $val1 += $val1;
    }
    echo '<hr>';

    //print_r($mas);


    echo '<p>2.	Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.</p>';



    echo '<br>';
    foreach (range(1, 300) as $val1) {
        $sk = rand(0, 300);
        if ($sk > 275) {
            echo '<a style="color:red;" >' . ' ' . $sk . ' ' . '</a>';
        } else {
            echo '<a class="skaicius" >' . ' ' . $sk . '' . '</a>';
        }
        if ($sk > 150) {
            $count++;
        }
    }
    echo '<br>';
    echo '<a style="color:green;" >' . ' ' . $count++ . ' ' . '</a>';

    echo '<hr>';

    echo '<p>3.	Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.</p>';

    $sk = rand(3000, 4000);
    foreach (range(1, $sk) as $val1) {
        if ($val1 % 77 == 0) {
            $str .= strval($val1) . ', ';
        }
    }
    echo $str = substr($str, 0, -2);

    echo '<hr>';
    echo '<p>4.	Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
</p>';


    foreach (range(1, 6) as $k1) {
        $i = '*';
        $z .= "<div>$i</div>";
    }
     $z = '<div class="skaiciuszzv"> ' . $z . ' </div>';
    foreach (range(1, 7) as $k2) {
        echo $k2 = $z;
    }

    
    echo '<hr>';
    echo '<p>5.	Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.</p>';

    foreach (range(1, 10) as $k1) {
        $i = '';
        $c .= "<div class=\"istrizaine\">oo</div>";
    }
    echo $c = '<div class="skaiciuszzv"> ' . $c . ' </div>';
    foreach (range(1, 10) as $k2) {
        echo $k2 = $c;
    }

    echo '<hr>';
echo '<p>6.	Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
a)	Iškritus herbui;
b)	Tris kartus iškritus herbui;
c)	Tris kartus iš eilės iškritus herbui;
</p>';
echo '<br>';
    $count = 0;
    $mert = 0;
    echo "A:";
     echo '<br>';
    echo $pinigas;
    
    while( $count !== 1){
        $pinigas = rand(1, 2);
        if ($pinigas == 1){
            echo 'Pinigas S';
             echo '<br>';
        }
        if ($pinigas == 2){
            echo 'Pinigas H'; $count++;
            echo '<br>';
         }
        $mert++;
     }
    echo '<br>';
    echo 'Metimai: '.$mert;
echo '<hr>';
echo "B:";
 echo '<br>';
$count = 0;
$mert = 0;

while( $count !== 3){
        $pinigas = rand(1, 2);
        if ($pinigas == 1){
            echo 'Pinigas S';
            echo '<br>';
        }
        if ($pinigas == 2){
            echo 'Pinigas H'; $count++;
            echo '<br>';
        }
        $mert++;
     }
 
    echo '<br>';
    echo 'Metimai: '.$mert;

    echo '<hr>';
echo "C:";
 echo '<br>';
$count = 0;
$mert = 0;

while( $count !== 3){
        $pinigas = rand(1, 2);
        if ($pinigas == 1){
            echo 'Pinigas S';
            $count = 0;
            echo '<br>';
        }
        if ($pinigas == 2){
            echo 'Pinigas H'; $count++;
            echo '<br>';
        }
        $mert++;
     }
    echo '<br>';
    echo 'Metimai: '.$mert;
echo '<hr>';
echo '<p>7.	Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: laimėtojo vardas”. Taškų kiekį generuokite funkcija rand(). Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.</p>';

    $taskaiP  = 0;
    $taskaiK  = 0;

while( $taskaiP < 222 || $taskaiK < 222){
        $periukas = rand(10, 20);
        $kaziukas = rand(5, 25);
        $taskaiP += $periukas;
        $taskaiK +=  $kaziukas;
        echo 'Petriukas: ' . $taskaiP;
         echo '<br>';
        echo 'Kaziukas: ' . $taskaiK;
         echo '<br>';
        if ($taskaiP >= 222){
            echo 'Partija laimejo Petriukas: '.$taskaiP;
            echo '<br>';
            break;
        }
        if ($taskaiK >= 222){
            echo 'Partija laimejo Kaziukas: '.$taskaiK;
            echo '<br>';
            break;
        } 
     }

    echo '<br>';





    
 //echo '</pre>';


    


    echo '<pre>';
    echo '</pre>';


    echo '<hr>';
    echo '<br>';



    ?>

</body>

</html>