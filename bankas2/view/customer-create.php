    <div class="container text-left">
        <div class="row">
            <div class="col-12 col-sm-6 p-3 ">
                <h4>Create new account:</h4>
                <form class="text-begin p-2" action="<?= URL ?>customers/save" method="post">
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

                        echo '<div class ="col-12 col-sm-6 p-3 mt-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px;">';
                        echo '<h4 class="fs-5 fw-lighter m-3">Customer id:<span class="fs-4 fw-light"> &nbsp;' . $customer['id'] . '</span></h4>';
                        echo'<h2 class="border-bottom m-3"></h2>';
                        echo '<h5 class="fs-6 fw-lighter m-3">Name:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $customer['name'] . '</span></h5>';
                        echo '<h5 class="fs-6 fw-lighter m-3">Surname:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $customer['surname'] .'</span></h5>';
                        echo '<h5 class="fs-6 fw-lighter m-3">Personal ID:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;'. $customer['personal_id'] . '</span></h5>';
                        echo'<h2 class="m-3 border-bottom"></h2>';
                        echo '<h5 class="fs-6 fw-lighter m-3">Account No.:<span class="fs-5 fw-light float-end">&nbsp;&nbsp;'. $customer['account'] . '</span></h5>';
                        echo '<h5 class="fs-6 fw-lighter m-3">Balance:<span class="fs-5 fw-light float-end">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $customer['balance'] . '&nbsp;&nbsp;&euro;</span></h5>';
                break;
            }
            echo '</div>';
            ?>
        </div>
    </div>
    </body>