<?php

echo $nameerr = (string) $_GET['name'];
echo $surnameerr = (string) $_GET['surname'];
echo $ideerr = (string) $_GET['id'];





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
                <li><a href="http://localhost/bit_php/bankas_ver_1/new.php" class="nav-link px-2 text-white p-4">Add
                        Account</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/transfer.php" class="nav-link px-2 text-secondary p-4">Transfer</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/allcustomers.php" class="nav-link px-2 text-white p-4">All Customers</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/delet.php" class="nav-link px-2 text-white p-4">Delet
                        Account</a></li>
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
    <div class="container text-left">
        <div class="row">
            <div class="col-12 col-sm-6 p-3 ">
                <div class="text-begin p-2 align-self-start">
                    <?php
                    if (!$nameerr == '') {
                        echo '<h4>Minimalus simboliu kiekis varde turi buti tris:</h4>
                        <h5 style="color:crimson">Vardas neatitika formato.</h5>';
                    }
                    if (!$surnameerr == '') {
                        echo
                        '<h4>Minimalus simboliu kiekis pavardeje turi buti tris:</h4>
                        <h5 style="color:crimson">Pavarde neatitika formato.</h5>';
                    }
                    if (!$ideerr == '') {
                        echo
                        '<h4>Id kodas neatitiko formato:</h4>
                        <h5 style="color:crimson">Tikrinkite id koda.</h5>';
                    }
                    ?>
                    <form action="http://localhost/bit_php/bankas_ver_1/new.php">
                        <div class="col-12 col-sm-6 pt-3 ">
                            <button type="submit" class="btn btn-warning">Go back</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            foreach ($users as $custom) {
                if ($custom['account'] == $account) {
                    echo '<div class ="col-12 col-sm-6 p-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px;">';
                    echo '<h4>Customer id:  ' . "&nbsp;&nbsp;&nbsp;" . $custom['code'] . '</h4>';
                    echo '<p>Account Nr:  </p>' . '<h4>'  . $custom['account'] . '</h4>';
                    echo '<h3> Balace:  ' . '<span style="color: ' . $color . ';">&nbsp;&nbsp;&nbsp;' . $custom['balance'] . '</span></h3>';
                    echo '<h3> Name:' . "&nbsp;&nbsp;&nbsp;"   . $custom['name'] . '</h3>';
                    echo '<p> Surname: ' . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $custom['surname'] . '</p>';
                    echo '<p>  Personal id:' . "&nbsp;&nbsp;&nbsp;" . "\n" . $custom['personal_id'] . '</p></div>';
                    break;
                }
            }
            ?>









        </div>
    </div>
</body>

<footer>
</footer>

</html>