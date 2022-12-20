<?php
session_start();

$rnd = [rand(1, 100)];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['rand'] = $rnd;
    header('Location: http://localhost/bit_php/nd/web/test.php');
    die;
}

$rand[] = $_SESSION['rand'];
unset($_SESSION['rand']);

$a = serialize($rand);
file_put_contents(__DIR__ . '/rez.txt', $a);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CB</title>
</head>

<body>

    <form action="http://localhost/bit_php/nd/web/test.php?rand" ethod="post">
        <button type="submit">GO</button>

    </form>

    <h2>
        Sugeneruotas skaiciu:<?= $rnd ?>
    </h2>


</body>

</html>