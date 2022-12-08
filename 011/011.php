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
    echo '<hr>';
    echo 'while : <br>';
    $sk = rand(0,9);
    while($sk<9){
    echo $sk.'<br>';
    $sk = rand(0, 9);
    }

    echo '<hr>';
    
    echo 'do while : <br>';
    $sk = rand(0, 9);
    do  {
        echo $sk . '<br>';
        $sk = rand(0, 9);
    }while ($sk < 9);

    echo '<hr>';
    
    // for ($a = 1; $a<=5; $a++){
    //     echo 'Didisys ciklas : '. $a ;
    //     echo'<br>';
    //     for ($b = 1; $b<=5; $b++){
    //         echo 'Mazasis ciklas : '. $b;
    //         echo '<br>';
    //         break 2; // nutruakia ir didyji cikla jei 2
    //     }
    // }
    
    echo '<hr>';
    $mas1 =[1,2,3];
    array_push($mas1, 'Petras'); // neneudojama
    $mas1 [88] = 'Jonas';
    $mas1['butas Nr 66'] = 'Maryte';
    $mas1[] = 'Antanas'; // naodi toki pridejima
    
    
    array_shift($mas1); // pasalina pirma idexo reiksme
    array_unshift($mas1, 'Bebras'); // prideda i prieki konkrecia reiksme

    // Indexas masyve gali but stringas, metodai neperindexuoja situ reiksmiu
    
    print_r($mas1);   // masyva negalima is echo inti

    echo '<hr>';
    echo 'Indexuoja bet nerikiuoja ';
    $mas1 = [1, 2, 3];
    $mas1[147] = 'Jonas';
    $mas1[88] = 'Jonas';
    $mas1[] = 'Antanas';
    

    print_r($mas1);

    echo '<hr>';

    $mas1 = ['a'=>1,'add'=>2,3];
    $mas1[false] = 'Bebras';
    $mas1[true] = 'Bebras';
    $mas1['5.88'] = 'Zita';
    $mas1[''] = 'tuscias stringas indexe';

    print_r($mas1);


    echo '<hr>';

  

    $mas1 = ['a' => 1, 'add' => 2, 3];
    $mas1[false] = 'Bebras';
    $mas1[true] = 'Bebras';
    $mas1['5.88'] = 'Zita';
    $mas1[''] = 'tuscias stringas indexe';

    foreach($mas as  $value){
        echo"<h2> $value </h2>";
    }

    foreach ($mas as $index => $value) {
        echo "<h2>$index: <i>$value</i> </h2>";
    }
    echo "<h2>$index: <i>$value</i> </h2>";

    print_r($mas1);

    echo '<hr>';

    print_r($mas1);

    arsort($mas1);

    $mas1['777'] = [777, 999];

    // arsort($mas1);

    print_r($mas1);

    foreach ($mas1 as $index => $value) {
        if (!is_array($value)) {
            echo "<h2>$index: <i>$value</i></h2>";
        } else {
            foreach ($value as $index2 => $value2) {
                echo "<h2>$index2: <i>$value2</i></h2>";
            }
        }
    }


    print_r(range(1,5));
    foreach (range(1, 5) as $go){
        echo 'Reiksme: '. $go. '<br>';
    }
    echo '<hr>';

    foreach (range('a', 'A') as $go) {
        echo 'Reiksme: ' . $go . '<br>';
    }
    echo '<hr>';

    $mas1 = ['a' => 1, 'ddd' => 2, 3];
    $mas1['5.8888'] = 'Bebras';


    print_r($mas1);

    arsort($mas1);

    $mas1['777'] = [777, 999];

    // arsort($mas1);

    print_r($mas1);

    foreach ($mas1 as $index => $value) {
        if (!is_array($value)) {
            echo "<h2>$index: <i>$value</i></h2>";
        } else {
            foreach ($value as $index2 => $value2) {
                echo "<h2>$index2: <i>$value2</i></h2>";
            }
        }
    }
    echo '<hr>';
    ?>
</body>

</html>