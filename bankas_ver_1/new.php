<?php
session_start();
$data = $_SESSION['data'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id = $_POST['personal_id'];
    $balance = 0;
    $account = 'LT63000000' . rand(1000000, 10000000);
    $data = [$account, $balance, $name, $surname, $id];

    $_SESSION['date'] = $data;
    header('Location: http://localhost/bit_php/bankas_ver_1/new.php');
    die;
}
$customer = $_SESSION['date'];
unset($_SESSION['date']);

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
<header>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <img style="filter: invert(100%);" src="./img_464486.png" alt="pig" height="157">
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">

                <button type="button" class="btn btn-outline-light me-12 mt-5">Log out</button>

            </form>
            <!-- <button type="button" class="btn btn-warning">Sign-up</button> -->
        </div>
        </div>
    </header>

    <body class="p-3 bg-dark text-white">
        <div class="container">
            <div class="text-begin">
                <div>
                    <form action="http://localhost/bit_php/bankas_ver_1/new.php?id" method="post">
                        <input class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-3" type="text" name="name" class="form-control" placeholder="Name">
                        <input class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-3" type="text" name="surname" class="form-control" placeholder="Surname">
                        <input class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-3" type="text" name="personal_id" class="form-control" placeholder="Personal ID">
                        <button type="submit" class="btn btn-outline-light ">Add account</button>
                    </form>
                </div>
            </div>
            <div><?php

                    foreach ($customer as $i => $user) {
                        echo $customer[$i];
                    }


                    ?></div>
        </div>
    </body>

    <!-- <footer>
        <h3 class="pb-4 border-bottom">Kontaktai</h3>
        </h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <div>
                    <h4 class="fw-bold mb-0">Adresas</h4>
                    <p></p>
                    <p>Trečia eglė už pušies.</p>
                    <p>LT-9giles, Labanoro giria.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#cpu-fill"></use>
                </svg>
                <div>
                    <h4 class="fw-bold mb-0">Telefonai</h4>
                    <p></p>
                    <p>Skambinti varpasi</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#calendar3"></use>
                </svg>
                <div>
                    <h4 class="fw-bold mb-0">Įmonės informacija</h4>
                    <p></p>
                    <p>2023 Metu gazėlė.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#home"></use>
                </svg>
                <div>
                    <h4 class="fw-bold mb-0">El. pašto adresai</h4>
                    <p></p>
                    <p>ragai.ir.kanopos@bit.lt.</p>
                </div>
            </div>
        </div>
    </footer> -->

</html>