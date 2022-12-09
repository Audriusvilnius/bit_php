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

 
    foreach (range(1, 50) as $val1){
        foreach (range(1, 5) as $i) {
        $i = '*';
        $s = '<div class="zvaigz">'.$i++ ;
        }
        
        echo $val1 = '<div class="conteiner">'.$s.'</div>'.'</div>';
        //echo $val1 += $val1;
    }
    echo '<hr>';

//print_r($mas);


echo '<p>2.	Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.</p>';



echo '<br>';
foreach (range(1, 300) as $val1){
       $sk=rand(0,300);
       if ($sk > 275){echo'<a style="color:red;" >'.' '.$sk.' '.'</a>';} else {
            echo '<a class="skaicius" >'.' '.$sk.''.'</a>';
        }
        if ($sk > 150) {
            $count++;}

    }
    echo '<br>';
    echo '<a style="color:green;" >' . ' ' . $count++ . ' ' . '</a>';
    
    echo '<hr>';

echo '<p>3.	Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.</p>';

 $sk=rand(3000,4000);
    foreach (range(1, $sk) as $val1) {
        if ($val1 % 77 == 0) {
            $str .=strval($val1).', ';
        }
    }
    echo substr( $str, 0, -2); 
     
    

    
    echo '<pre>';
    echo '</pre>';


    echo '<hr>';
    echo '<br>';



    ?>

</body>

</html>