<?php
session_start();
//id - /^([1-6]{1})([0-9]{2})([0-1]{1})([1-2]{1})([0-3]{1})([0-9]{1})([0-9999]{4})$/

if (!file_exists(__DIR__ . '/data')) {
    $data_ba = [];
} else {
    $data_ba = unserialize(file_get_contents(__DIR__ . '/data'));
}
$data = $_SESSION['data'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['name'] != '' && $_POST['surname'] != '' && $_POST['personal_id']) {
    if (!preg_match('/\D([A-Za-z]{2})/', $_POST['name']) && !preg_match('/[1-9]/', $_POST['name'])) {
        header('Location: http://localhost/bit_php/bankas_ver_1/userdatach.php?name=' . $_POST['name']);
        //echo '<h1>Pertrumpas Vardas</h1>' . $_POST['name'];
    } else {
        $name = $_POST['name'];
        if (!preg_match('/\D([A-Za-z]{2})/', $_POST['surname'])) {
            header('Location: http://localhost/bit_php/bankas_ver_1/userdatach.php?surname=' . $_POST['surname']);
            //echo '<h1>Pertumpa pavarde</h1>' . $_POST['surname'];
        } else {
            $surname = $_POST['surname'];
            if (!preg_match('/^([1-6]{1})([0-9]{2})([0-1]{1})([0-2]{1})([0-3]{1})([0-9]{1})([0-9999]{4})$/', $_POST['personal_id'])) {
                header('Location: http://localhost/bit_php/bankas_ver_1/userdatach.php?id=' . $_POST['personal_id']);
                // echo '<h1>Neteisingas kodas</h1>' . $_POST['personal_id'];
            } else {
                $id = $_POST['personal_id'];
                //echo '<h1>Id kodas</h1>' . $id;
                $balance = 0;
                $account = 'LT' . rand(10, 99) . '6300' . rand(10000000000, 99999999999);
                foreach ($data_ba as $i => $new) {
                    if ($data_ba[$i]['personal_id'] == $_POST['personal_id']) {
                        $new = $data_ba[$i]['code'];
                        $code = $new;
                        break;
                    } else {
                        $temp = rand(1000000, 10000000);
                        $code = $temp;
                    }
                }
                //$code['code'] = $temp['code'];
                //print_r($code);
                // echo '<pre>';print_r($data_ba);
                $data[] = ['code' => $code, 'account' => $account, 'balance' => $balance, 'name' => $name, 'surname' => $surname, 'personal_id' => $id];
                $_SESSION['date'] = $data;
                $newData = [...$data_ba, ...$data];

                file_put_contents(__DIR__ . '/data', serialize($newData));
                header('Location: http://localhost/bit_php/bankas_ver_1/new.php');
                die;
            }
        }
    }
}


$customer = $_SESSION['date'];
unset($_SESSION['date']);
echo $massage;



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
<!-- <div class="d-flex position-relativ">
            <img class="flex-shrink-0 me-3" style="filter: invert(100%);" src="./img_464486.png" alt="pig" height="157">
        </div> -->
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
                <li><a href="http://localhost/bit_php/bankas_ver_1/new.php" class="nav-link px-2 text-secondary p-4">Add Account</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/transfer.php" class="nav-link px-2 text-white p-4">Transfer</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/allcustomers.php" class="nav-link px-2 text-white p-4">Customers</a></li>
                <!-- <li><a href="http://localhost/bit_php/bankas_ver_1/index.php" class="nav-link px-2 text-white p-4"><img src="./sprite2022.png" height="10"></li></a> -->
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
                <h4>Create new account:</h4>
                <form class="text-begin p-2" action="http://localhost/bit_php/bankas_ver_1/new.php?id" method="post">
                    <p class="pt-2">Name:</p>
                    <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="name" class="form-control" placeholder="Name">
                    <p class="pt-2">Surname:</p>
                    <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="surname" class="form-control" placeholder="Surname">
                    <p class="pt-2">Personal ID:</p>
                    <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="personal_id" class="form-control" placeholder="Personal ID">
                    <div class="col-12 col-sm-6 pt-3 ">
                        <button type="submit" class="btn btn-outline-light ">Add Account</button>
                    </div>
                </form>
            </div>
            <?php
            echo '<div class ="col-12 col-sm-6 p-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px; " >';
            if (isset($customer)) {
                '<div class="col-12 col-sm-6 pt-3 >';
                echo '<h3>New account:</h3>';
                '</div>';
            }
            foreach ($customer as $user) {

                echo '<h4>Customer id:  ' . "&nbsp;&nbsp;&nbsp;" . $user['code'] . '</h4>';
                echo '<p>Account date:  </p>' . '<span;">&nbsp;&nbsp;&nbsp;' . '<h5>'  . $user['account'] . '</h4></span>';
                echo '<p>Balace:   </p>' . '<h5>' . $user['balance'] .
                    '</h4>';
                echo '<h3> Name:' . "&nbsp;&nbsp;&nbsp;"   . $user['name'] . '</h3>';
                echo '<p> Surname: ' . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $user['surname'] . '</p>';
                echo '<p>  Personal id:' . "&nbsp;&nbsp;&nbsp;" . "\n" . $user['personal_id'] . '</p></div>';
                $masabe = $user['code'];
                break;
            }
            echo '</div>';
            ?>
        </div>
    </div>
</body>
<footer>
    <div class="container ">
        <!-- <h4 class="pb-4 border-bottom"></h4> -->
        <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <div class="fs-6">
                    <h5 class="fw-bold mb-0">Adresas</h5>
                    Trečia eglė už pušies.
                    LT-9giles, Labanoro giria.
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#cpu-fill"></use>
                </svg>
                <div>
                    <h5 class="fw-bold mb-0">Telefonai</h5>
                    <p>Skambinti varpasi</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#calendar3"></use>
                </svg>
                <div>
                    <h5 class="fw-bold mb-0 ">Įmonės informacija</h5>

                    <p>2023 Metu gazėlė.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#home"></use>
                </svg>
                <div>
                    <h5 class="fw-bold mb-0">El. pašto adresai</h5>

                    <p>ragai.ir.kanopos@bit.lt.</p>
                </div>
            </div>
        </div> -->
    </div>
</footer>

</html>