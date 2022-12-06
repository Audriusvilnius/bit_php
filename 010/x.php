<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pradzia</title>
</head>

<body>

    <h1>
        <?php

        echo 5 + 2;
        echo '<br>';
        echo '<i>B<i/>';
        echo '<br>';
        $a = 5*7;
        echo'<br>';
        echo $a;
        print_r($a);


        // Komentaras sau -privatus

        /*
        Komentaras 
        kitiems - Viesas komentaras
        */

        # nevisai komentaras
        echo '<br>';
        $trecias = 5;
        $ketvirtas = 5;
        echo $trecias++;
        echo '<br>';
        echo ++$ketvirtas;
        echo '<br>';
        echo $trecias;


echo $trecias++ + ++$trecias;
        // 5 + 7

        echo '<br>';
        echo $trecias +=10;
        echo '<br>';
        $j  = ' Jonas';
        $pirmas  = 'bla bla ';
        $antras = ' Ku ku ';
        $trecias = $pirmas.$antras;
        echo $trecias;
        echo '<br>';
        $ketvirtas  = "bla  $j bla ";
        echo $ketvirtas;
        // "\n" - dvigunoskabutes jei reik kazka daaryt su kintamuoju

        
        
        ?>

    </h1>


    <h2></h2>


</body>
<script>
//document.querySelector('h2').innerText = 5 + 2;
</script>

</html>