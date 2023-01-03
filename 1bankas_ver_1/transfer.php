<?php

if (isset($_GET['account'])) {
    $tranz = unserialize(file_get_contents(__DIR__ . '/data'));
    $account = $_GET['account'];
}

//  if (isset($_GET['account'])) {
// }



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
                <li><a href="http://localhost/bit_php/bankas_ver_1/allcustomers.php" class="nav-link px-2 text-white p-4">Customers</a></li>
                <!-- <li><a href="http://localhost/bit_php/bankas_ver_1/index.php" class="nav-link px-2 text-white p-4"><img src="./5f1b1271a1e429.16105348.png" height="9"></li></a> -->
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
                <h4>Transfer operation:</h4>
                <p class="pt-2">Acccount number:</p>
                <form class="text-begin p-2" action="http://localhost/bit_php/bankas_ver_1/transfer.php?account" method="get">
                    <input class="col-8 col-sm-11 col-lg-6 mb-1 mb-lg-12 me-lg-10" type="text" name="account" class="form-control" placeholder="Account">
                    <div class="text-begin pt-2 ">
                        <button type="submit" class="btn btn-outline-info ">Search...</button>
                    </div>
                </form>
                <?php foreach ($tranz as $user) {
                    if ($account == $user['account']) {
                        $add['account'] = $user['account'];
                    }
                } ?>
                <p class="pt-2">Tramsaction:</p>
                <form class="text-begin p-2" action="http://localhost/bit_php/bankas_ver_1/addpinigu.php?account=<?= $add['account'] ?>" method="post">
                    <input class="ccol-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="pinigu" class="form-control" placeholder="Transfer sum">
                    <div class="text-begin pt-2 ">
                        <button type="submit" class="btn btn-outline-danger ">Transfer</button>
                    </div>
                </form>
            </div>

            <?php
            if (isset($_GET['account'])) {
                foreach ($tranz as $custom) {
                    if ($custom['account'] == $account) {
                        echo '<div class ="col-12 col-sm-6 p-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px;">';
                        echo '<h4>Customer id:  ' . "&nbsp;&nbsp;&nbsp;" . $custom['code'] . '</h4>';
                        echo '<p>Account date:  </p>' . '<span style="color: skyblue;">&nbsp;&nbsp;&nbsp;' . '<h5>'  . $custom['account'] . '</h5></span>';
                        echo '<p>Balace:   </p>' . '<h5>' . $custom['balance'] .
                            '</h5>';
                        echo '<h3> Name:' . "&nbsp;&nbsp;&nbsp;"   . $custom['name'] . '</h3>';
                        echo '<p> Surname: ' . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $custom['surname'] . '</p>';
                        echo '<p>  Personal id:' . "&nbsp;&nbsp;&nbsp;" . "\n" . $custom['personal_id'] . '</p></div>';
                    }
                }
            }
            if ($account == '') {
                foreach ($tranz as $custom) {
                    echo '<div class ="col-12 col-sm-6 p-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px;">';
                    echo '<h4>Customer id:  ' . "&nbsp;&nbsp;&nbsp;" . $custom['code'] . '</h4>';
                    echo '<p>Account date:  </p>' . '<span style="color: skyblue;">&nbsp;&nbsp;&nbsp;' . '<h5>'  . $custom['account'] . '</h5></span>';
                    echo '<p>Balace:   </p>' . '<h4>' . $custom['balance'] .
                        '</h4>';
                    echo '<h3> Name:' . "&nbsp;&nbsp;&nbsp;"   . $custom['name'] . '</h3>';
                    echo '<p> Surname: ' . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $custom['surname'] . '</p>';
                    echo '<p>  Personal id:' . "&nbsp;&nbsp;&nbsp;" . "\n" . $custom['personal_id'] . '</p></div>';
                }
            }
            ?>
        </div>
    </div>
</body>

<footer>
</footer>

</html>