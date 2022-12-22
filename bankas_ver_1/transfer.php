<?php

if (isset($_GET['code'])) {
    $tranz = unserialize(file_get_contents(__DIR__ . '/data.txt'));
}

if (isset($_GET['code'])) {
    $code = $_GET['code'];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BANKAS RAGAI IR KANOPOS</title>
</head>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="http://localhost/bit_php/bankas_ver_1/index.php" class="nav-link px-2 text-white"><img style="filter: invert(100%);" class="d-block  pb-6" src="./home.png" alt="pig" height="45"></a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/new.php" class="nav-link px-2 text-white p-4">Add Account</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/transfer.php" class="nav-link px-2 text-secondary p-4">Transfer</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/allcustomers.php" class="nav-link px-2 text-white p-4">All Customers</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/delet.php" class="nav-link px-2 text-white p-4">Delet Account</a></li>
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Log out</button>
            </div>
        </div>
        <h2 class="pb-4 border-bottom"></h2>
    </div>
</header>

<body class="p-2 bg-dark text-white">
    <div class="container">
        <div class="text-begin p-2 align-self-start">
            <h4>Operacijos su pinigais:</h4>
            <form class="text-begin p-5" action="http://localhost/bit_php/bankas_ver_1/transfer.php?code" method="get">
                <p class="pt-2">Kliento unikalus kodas:</p>
                <input class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-3" type="text" name="code" class="form-control" placeholder="Name">
                <div class="text-begin pt-5 ">
                    <button type="submit" class="btn btn-outline-light ">Search...</button>
                </div>
            </form>

            <?php foreach ($tranz as $user) {
                if ($code == $user['code']) {
                    $add['code'] = $user['code'];
                    //print_r($add['code']);
                }
            } ?>
            <form action="http://localhost/bit_php/bankas_ver_1/addpinigu.php?code=<?= $add['code'] ?>" method="post">
                <input type="text" name="pinigu">
                <button type="submit" class="btn btn-danger">Transfer</button>
            </form>

            <!-- <form class="text-begin p-5" action="http://localhost/bit_php/bankas_ver_1/allcustomers.php?scode" method="post">
                <p class="pt-2">Kliento kodas:</p>
                <input class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-3 form-control " type="text" name="surname" placeholder="Customer code"> -->
            <!-- <div class="text-begin pt-5 ">
                <button type="submit" class="btn btn-outline-light ">Search...</button>
            </div> -->
            <!-- </form> -->
        </div>
        </form>
        <div>
            <?php
            if (isset($_GET['code'])) {
                foreach ($tranz as $custom) {
                    if ($custom['code'] == $code) {
                        echo '<h4>Kliento kodas:  ' . $custom['code'] . '</h4>';
                        echo '<p>Saskaitos Nr:  ' . $custom['accaount'] . '</p>';
                        echo '<p>Balansas:   ' . $custom['balance'] . '</p>';
                        echo '<p> Kliento vardas: ' . $custom['name'] . '</p>';
                        echo '<p> Klento pavarde: ' . $custom['surname'] . '</p>';
                        echo '<p>  Asmens kodas:   ' . $custom['personal_id'] . '</p>';
                        echo '<h4 class="pb-4 border-bottom"></h4>';
                    }
                }
            }
            ?>
        </div>
    </div>
</body>

<footer>
</footer>

</html>