<!-- <?php
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

?> -->


<body class="p-2 bg-dark text-white">


    <h2>All Customers</h2>
    <ul>
        <?php foreach ($customers as $customer):?>
        <li></li>
        <?php endfor ?>

    </ul>


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
                </form>
                <div class="col-12 col-sm-6 pt-3 ">
                    <a href="http://localhost/bit_php/bankas_ver_1/sort.php?sort='.<?= $_GET['sort'] ?>.'">
                        <!-- <input type="hidden" name="sort" value="sort"> -->
                        <button class="btn btn-outline-info ">Sort A-Z</button>
                    </a>
                </div>


            </div>
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
            <!-- <?php
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
                } ?> -->
            <!-- <?php
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
            } ?> -->
        </div>
    </div>
    </div>