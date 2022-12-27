<?php
if (isset($_GET['name'])) {
    $search = unserialize(file_get_contents(__DIR__ . '/data'));
    $name = $_GET['name'];
    $delet_conf = 2;
}

if (isset($_GET['account'])) {
    $search = unserialize(file_get_contents(__DIR__ . '/data'));
    $account = $_GET['account'];
    foreach ($search as $i => $users) {
        if ($users['account'] == $account && $users['balance'] == 0) {
            unset($search[$i]);
            $delet_conf = 1;
            file_put_contents(__DIR__ . '/data', serialize($search));
        }
        if ($users['account'] == $account) {
            if ($users['balance'] != 0) {
                $delet_conf = 0;
                break;
            }
        }
    }
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
                <li><a href="http://localhost/bit_php/bankas_ver_1/new.php" class="nav-link px-2 text-white p-4">Add
                        Account</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/transfer.php" class="nav-link px-2 text-white p-4">Transfer</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/allcustomers.php" class="nav-link px-2 text-secondary p-4">Customers</a></li>
                <!-- <li><a href="http://localhost/bit_php/bankas_ver_1/index.php" class="nav-link px-2 text-white p-4"><img src="./EA-logo_2019.svg" height="9"></li></a> -->
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Log out</button>
                <!-- <button type="button" class="btn btn-warning">Sign-up</button> -->
            </div>
        </div>
        <h2 class="pb-4 border-bottom"></h2>
    </div>
</header>

<body class="p-2 bg-dark text-white">
    <div class="container text-left">
        <div class="row">
            <div class="col-12 col-sm-6 p-3 ">
                <h4>Find customer:</h4>
                <form class="text-begin" action="http://localhost/bit_php/bankas_ver_1/allcustomers.php?name" method="get">
                    <p class="pt-2">Customer name:</p>
                    <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="name" class="form-control" placeholder="Name">
                    <div class="col-12 col-sm-6 pt-3 ">
                        <button type="submit" class="btn btn-outline-info ">Search...</button>
                    </div>
                    <div class="col-12 col-sm-6 pt-3 ">
                        <a href="http://localhost/bit_php/bankas_ver_1/sort.php?sort">
                            <input type="hidden" name="sort" value="sort">
                            <button type="submit" class="btn btn-outline-info ">Sort A-Z</button>
                        </a>
                    </div>
                </form>

            </div>
            <!-- <?php
                    if ($search != []) {
                        foreach ($search as $custom) {
                            if ($custom['name'] == $name) {

                                echo '<div class ="col-12 col-sm-6 p-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px;">
                            <h4 class="pb-1">Sąskaitos kodas:' . $custom['code'] . '</h4>';
                                echo '<p>Saskaitos Nr:' . $custom['account'] . '</p>';
                                echo '<p>Balansas:   ' . $custom['balance'] . ' pinigu</p>';
                                echo '<b><p style="color: skyblue;"> Kliento vardas: ' . $custom['name'] . '</p></b>';
                                echo '<p> Klento pavarde: ' . $custom['surname'] . '</p>';
                                echo '<p>  Asmens kodas:   ' . $custom['personal_id'] . '</span></p></div>';
                            }
                        }
                    } ?> -->
            <div class="col-12 col-sm-6 p-3 ">
                <h4>Close account</h4>
                <p></p>
                <form class="text-begin" action="http://localhost/bit_php/bankas_ver_1/allcustomers.php?account" method="get">
                    <p>Account number:</p>
                    <input class="col-8 col-sm-11 col-lg-5 mb-1 mb-lg-12 me-lg-10" type="text" name="account" class="form-control" placeholder="Account">
                    <div class="col-12 col-sm-6 pt-3 ">
                        <button type="submit" class="btn btn-outline-danger ">Delet</button>
                    </div>
                </form>
                <div class="col-12 col-sm-6 pt-3 ">
                </div>
            </div>
        </div>
    </div>
    <div class="container text-left">
        <h2 class="pb-4 border-bottom"></h2>
        <div class="row">
            <?php
            if ($search != []) {
                foreach ($search as $custom) {
                    if ($custom['name'] == $name) {
                        echo '<div class ="col-12 col-sm-6 p-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px;">';
                        echo '<h4>Customer id:  ' . "&nbsp;&nbsp;&nbsp;" . $custom['code'] . '</h4>';
                        echo '<p>Account Nr:  </p>' . '<h5>'  . $custom['account'] . '</h5>';
                        echo '<p>Balace:   </p>' . '<h4>' . $custom['balance'] .
                            '</h4>';
                        echo '<h3> Name:' . '<span style="color: skyblue;">&nbsp;&nbsp;&nbsp;' . $custom['name'] . '</span></h3>';
                        echo '<p> Surname: ' . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $custom['surname'] . '</p>';
                        echo '<p>  Personal id:' . "&nbsp;&nbsp;&nbsp;" . "\n" . $custom['personal_id'] . '</p></div>';
                    }
                } ?>
            <?php
                if ($name == '') {
                    foreach ($search as $custom) {
                        echo '<div class ="col-12 col-sm-6 p-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px;">';
                        echo '<h4>Customer id:  ' . "&nbsp;&nbsp;&nbsp;" . $custom['code'] . '</h4>';
                        echo '<p>Account Nr:  </p>' . '<h5>'  . $custom['account'] . '</h5>';
                        echo '<p>Balace:   </p>' . '<h4>' . $custom['balance'] .
                            '</h4>';
                        echo '<h3> Name:' . '<span style="color: skyblue;">&nbsp;&nbsp;&nbsp;' . $custom['name'] . '</span></h3>';
                        echo '<p> Surname: ' . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $custom['surname'] . '</p>';
                        echo '<p>  Personal id:' . "&nbsp;&nbsp;&nbsp;" . "\n" . $custom['personal_id'] . '</p></div>';
                    }
                }
            } ?>
        </div>
    </div>
    </div>
</body>

<footer>

</footer>

</html>