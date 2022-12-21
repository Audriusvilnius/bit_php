<?php
session_start();


if (isset($_GET['read'])) {
    $newData = unserialize(file_get_contents(__DIR__ . '/data.txt'));
    echo '<pre>';
    print_r($newData);
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
                <li><a href="http://localhost/bit_php/bankas_ver_1/index.php" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/new.php" class="nav-link px-2 text-white">Add Account</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/transfer.php" class="nav-link px-2 text-white">Transfer</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/allcustomers.php" class="nav-link px-2 text-white">All Customers</a></li>
                <li><a href="http://localhost/bit_php/bankas_ver_1/delet.php" class="nav-link px-2 text-secondary">Delet Account</a></li>
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
    <div class="container">
        <div class="text-begin p-2">
            <h4>Naujo kliento saskaitos atidarymas:</h4>
            <form class="text-begin p-5" action="http://localhost/bit_php/bankas_ver_1/new.php?id" method="post">
                <p class="pt-2">Kliento Vardas:</p>
                <input class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-3" type="text" name="name" class="form-control" placeholder="Name">
                <p class="pt-2">Kliento Pavarde:</p>
                <input class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-3" type="text" name="surname" class="form-control" placeholder="Surname">
                <p class="pt-2">Kliento ID kodas:</p>
                <input class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-3" type="text" name="personal_id" class="form-control" placeholder="Personal ID">
                <div class="pt-5">
                    <button type="submit" class="btn btn-outline-light ">Add account</button>
                </div>
            </form>
        </div>
        <h2 class="pb-4 border-bottom"></h2>
        <div>
            <h4>Sasakita sukurta, kliento duomenys:</h4>
            <?php
            foreach ($customer as $user) {
                echo '<h4>Kliento kodas:  ' . $user['code'] . '</h4>';
                echo '<p>Saskaitos Nr:  ' . $user['accaount'] . '</p>';
                echo '<p>Balansas:   ' . $user['balance'] . '</p>';
                echo '<p> Kliento vardas: ' . $user['name'] . '</p>';
                echo '<p> Klento pavarde: ' . $user['surname'] . '</p>';
                echo '<p>  Asmens kodas:   ' . $user['personal_id'] . '</p>';
                echo '<h4 class="pb-4 border-bottom"></h4>';
            }
            ?>
        </div>
    </div>
    <div class="container">
        <h2 class="pb-4 border-bottom"></h2>
        <div class="text-begin">
            <div>
                <a class="btn btn-outline-light " href="http://localhost/bit_php/bankas_ver_1/new.php?read">Customers data</a>
            </div>
        </div>
        <div>
            <h4>Klientu saras:</h4>
            <?php
            foreach ($newData as $user) {
                echo '<p>Saskaitos Nr:  ' . $user['accaount'] . '</p>';
                echo '<p>Balansas:   ' . $user['balance'] . '</p>';
                echo '<p> Kliento vardas: ' . $user['name'] . '</p>';
                echo '<p> Klento pavarde: ' . $user['surname'] . '</p>';
                echo '<p>  Asmens kodas:   ' . $user['personal_id'] . '</p>';
                echo '<h4 class="pb-4 border-bottom"></h4>';
            }
            ?>
        </div>
    </div>

</body>


<footer>
    <!--   <h3 class="pb-4 border-bottom">Kontaktai</h3>
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
        </div>-->
</footer>

</html>