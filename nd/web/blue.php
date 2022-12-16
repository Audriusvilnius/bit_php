<?php
if ($_GET['red'] == 1) {
    $red = '0';
}
if ($_GET['pirmas'] == 2) {
    header("Location: http://localhost/bit_php/nd/web/pirmas.php");
    die();
}
$color = 'skyblue';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <h1><?= $rez ?>
    </h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="<?= $red ?>; URL='http://localhost/bit_php/nd/web/red.php'">
    <link rel="stylesheet" href="./pirma_uzd.css">
    <title>Blue.PHP</title>
</head>

<header>
    <h2 style="color:black">
        Dabar tu BLUE.PHP
    </h2>
</header>

<body class="body" style="background-color: <?= $color ?>;">

    <div class=" color">
        <a class="a" style="color: black;" href="http://localhost/bit_php/nd/web/blue.php?red=1">RED.PHP</a>
    </div>
    <div class="color">
        <a class="a" style="color: black;" href="http://localhost/bit_php/nd/web/lemon.php?pirmas=2">WEB mechanika (background edition)</a>
    </div>



</body>

</html>