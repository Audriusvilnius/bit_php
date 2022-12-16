<?php
if ($_GET['pirmas'] == 1) {
    //$orange = file_get_contents(__DIR__ . '/lemon.php');
    //header('Content-Type: text/html');
    header("Location: http://localhost/bit_php/nd/web/lemon.php");
    die();
}
if ($_GET['pirmas'] == 2) {
    header("Location: http://localhost/bit_php/nd/web/pirmas.php");
    $pirmas = file_get_contents(__DIR__ . '/pirmas.php');
    //header('Content-Type: text/html');
    die();
}
$color = 'orange';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <h1><?= $rez ?></h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pirma_uzd.css">
    <title>ORANGE.PHP</title>
</head>

<header>
    <h2 style="color:black">
        Dabar to ORANGE.PHP
    </h2>
</header>

<body class="body" style="background-color: <?= $color ?>;">

    <div class=" color">
        <a class="a" style="color: black;" href="http://localhost/bit_php/nd/web/orange.php?pirmas=1">LEMON.PHP</a>
    </div>
    <div class="color">
        <a class="a" style="color: black;" href="http://localhost/bit_php/nd/web/orange.php?pirmas=2">WEB mechanika (background edition)</a>
    </div>



</body>

</html>