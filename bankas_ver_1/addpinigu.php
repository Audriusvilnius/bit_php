<?php

$users = unserialize(file_get_contents(__DIR__ . '/data.txt'));

$code = (float) $_GET['code'];
$pinigu = (float) $_POST['pinigu'];


foreach ($users as $i => $user) {
    if ($users[$i]['code'] == $code) {
        // print_r($users[$i]['code']);
        // echo '<br>';
        // print_r($users[$i]['balance']);
        // echo '<br>';
        if (($users[$i]['balance'] + $pinigu) >= 0) {
            $users[$i]['balance'] += $pinigu;
            header('Location: http://localhost/bit_php/bankas_ver_1/transfer.php?code=' . $code);
            break;
        } elseif (($users[$i]['balance'] + $pinigu) <= 0) {
            $minusas = $users[$i]['balance'] += $pinigu;
        }
    }
}

file_put_contents(__DIR__ . '/data.txt', serialize($users));

//break;
//echo $users[$i]['balance'] += $pinigu;
echo $minusas;
// echo $code;
// echo '<br>';
//print_r($_POST);


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
            <h4>NEPAKANKMAS PINIGU LIKYTIS: <?php echo $minusas; ?></h4>
            <form action="http://localhost/bit_php/bankas_ver_1/transfer.php?code=<?= $code ?>" method="post">
                <button type="submit" class="btn btn-danger">Go beck</button>
            </form>


        </div>
        </form>
        <div>

        </div>
    </div>
</body>

<footer>
</footer>

</html>