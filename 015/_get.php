<?php

define('COLORS', [
    'pink',
    'crimson',
    'skyblue',
    'green',
    'yellow'
]);

if (preg_match('/^[0-9a-f]{6}/', $_GET['color'] ?? '')) {
    $color = '#' . $_GET['color'];
    $error = 0;
} elseif (in_array($_GET['color'] ?? '', COLORS)) {
    $color = $_GET['color'];
    $error = 0;
} else {
    $error = 1;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <!-- OK -->
    <?php if (!$error) : ?>
    <div class="sq" style="background: <?= $color ?>;">
        <?= $color ?>
    </div>
    <!-- ERROR -->
    <?php else : ?>
    <h2>Bad color code</h2>
    <?php endif ?>

    <form action="http://localhost/bit_php/015/get.php?color=" method="get">
        <input type="text" name="color">
        <button type="submit">GO!</button>
    </form>
</body>

</html>