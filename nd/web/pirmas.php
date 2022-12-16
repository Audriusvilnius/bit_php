<?php

if ($_GET['color'] == 1) {
    $color = 'crimson';
} else {
    $color = 'black';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <h1><?= $rez ?></h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pirma_uzd.css">
    <title>Document</title>
</head>

<body class="body" style="background-color: <?= $color ?>;">

    <div class=" color">
        <a class="a" href="http://localhost/bit_php/nd/web/pirmas.php?">Nuorada i save be kintamojo</a>
    </div>
    <div class="color">
        <a class="a" href="http://localhost/bit_php/nd/web/pirmas.php?color=1">Nuorada i save su GET</a>
    </div>

</body>

</html>