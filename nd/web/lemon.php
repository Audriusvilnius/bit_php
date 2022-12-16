<?php
if ($_GET['pirmas'] == 1) {
    header("Location: http://localhost/bit_php/nd/web/orange.php");
    //$orange = file_get_contents(__DIR__ . './orange.php');
    die();
    //header('Content-Type: text/html');
}
if ($_GET['pirmas'] == 2) {
    // $pirmas = file_get_contents(__DIR__ . './pirmas.php');
    header("Location: http://localhost/bit_php/nd/web/pirmas.php");
    die();
}
$color = 'lemonchiffon';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <h1><?= $rez ?>
    </h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pirma_uzd.css">
    <title>LEMON.PHP</title>
</head>

<header>
    <h2 style="color:black">
        Dabar tu LEMON.PHP
    </h2>
</header>

<body class="body" style="background-color: <?= $color ?>;">

    <div class=" color">
        <a class="a" style="color: black;" href="http://localhost/bit_php/nd/web/lemon.php?pirmas=1">ORANGE.PHP</a>
    </div>
    <div class="color">
        <a class="a" style="color: black;" href="http://localhost/bit_php/nd/web/lemon.php?pirmas=2">WEB mechanika (background edition)</a>
    </div>



</body>

</html>