<!-- <?php foreach ($customers as $customer) : ?>
<?=print_r($customer);?>
<ul>


    <li> <b>id: <?= $customer['id'] ?></b> </li>
    <li> <?= $customer['name'] ?></li>
    <li> <?= $customer['surname'] ?></li>
    <li> <?= $customer['account'] ?></li>
    <li> <?= $customer['balance'] ?></li>
    <a href="<?= URL . 'customers/edit/' . $customer['id'] ?>">Redaguoti</a>
    <form action="<?= URL . 'customers/delete/' . $customer['id'] ?>" method="post">
        <button type="submit">Trinti</button>
    </form>
    </li>
</ul>

<?php endforeach ?> -->


<div class="container text-left">
    <div class="row">
        <div class="col-12 col-sm-6 p-3 ">
            <h4>Find customer:</h4>
            <form class="text-begin" action="#" method="get">
                <p class="pt-2">Customer name:</p>
                <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="id" class="form-control" placeholder="Name">
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
            <form class="text-begin" action="#" method="get">
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
            if ($customers != []) {
                foreach ($customers as $customer) {
                    if ($custom['name'] == $name) {
                        echo '<div class ="col-12 col-sm-6 p-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px;">';
                        echo '<h4>Customer id:  ' . "&nbsp;&nbsp;&nbsp;" . $customer['id'] . '</h4>';
                        echo '<p>Account Nr:  </p>' . '<h5>'  . $customer['account'] . '</h5>';
                        echo '<p>Balace:   </p>' . '<h4>' . $customer['balance'] .
                            ' Eur.</h4>';
                        echo '<h3> Name:' . '<span style="color: skyblue;">&nbsp;&nbsp;&nbsp;' . $customer['name'] . '</span></h3>';
                        echo '<p> Surname: ' . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $customer['surname'] . '</p>';
                        echo '<p>  Personal id:' . "&nbsp;&nbsp;&nbsp;" . "\n" . $customer['personal_id'] . '</p>';
                        echo '<div class="btn-group me-2" role="group" ><a href="'.URL . 'customers/edit/' . $customer['id'].'">
                        <button class="btn btn-outline-warning me-2">Edit</button></a>';
                        echo '<form action="'.URL . 'customers/delete/' . $customer['id']. '" method="post"><button class="btn btn-outline-danger pr-2" type="submit">Delet</button></form></div></div>';
    }
    }
    ?> -->
        <?php
                if ($name == '') {
                    foreach ($customers as $customer) {
                        echo '<div class ="col-12 col-sm-6 p-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px;">';
                        echo '<h4>Customer id:  ' . "&nbsp;&nbsp;&nbsp;" . $customer['id'] . '</h4>';
                        echo '<p>Account Nr:  </p>' . '<h5>'  . $customer['account'] . '</h5>';
                        echo '<p>Balace:   </p>' . '<h4>' . $customer['balance'] .
                            ' Eur.</h4>';
                        echo '<h3> Name:' . '<span style="color: skyblue;">&nbsp;&nbsp;&nbsp;' . $customer['name'] . '</span></h3>';
                        echo '<p> Surname: ' . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $customer['surname'] . '</p>';
                        echo '<p>  Personal id:' . "&nbsp;&nbsp;&nbsp;" . "\n" . $customer['personal_id'] . '</p>';
                        echo '<div class="btn-group me-2" role="group" ><a href="'.URL . 'customers/edit/' . $customer['id'].'">
                        <button class="btn btn-outline-warning me-2">Edit</button></a>';
                        echo '<form action="'.URL . 'customers/delete/' . $customer['id']. '" method="post"><button class="btn btn-outline-danger pr-2" type="submit">Delet</button></form></div></div>';
                    }
                }
            } 
     ?>
    </div>

</div>