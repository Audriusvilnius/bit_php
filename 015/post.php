<?php

session_start();
//POST scenarijus

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rez = $_POST['x'] + $_POST['y'];
    $_SESSION['mano_suma'] = $rez;
    header('Location: http://localhost/bit_php/015/post.php');
    die;
}

//$rez = isset($_POST['x']) ? $_POST['x'] + $_POST['y'] : 'do sum ';
// Get scenarijus

$rez = $_SESSION['mano_suma'] ?? 'nieko dar nera';
unset($_SESSION['mano_suma']);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <h1><?= $rez ?></h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="http://localhost/bit_php/015/post.php" method="post">
        <input type=" text" name="x">+<input type="text" name="y">
        <button type="submit">make sum</button>
    </form>

</body>

</html>