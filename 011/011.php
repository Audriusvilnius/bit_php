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
    
    for ($a = 1; $a<=5; $a++){
        echo 'Didisys ciklas : '. $a ;
        echo'<br>';
        for ($b = 1; $b<=5; $b++){
            echo 'Mazasis ciklas : '. $b;
            echo '<br>';
            break 2; // nutruakia ir didyji cikla jei 2
        }
    }
    
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
    ?>
</body>

</html>