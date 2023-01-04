<body class="p-2 bg-dark text-white">
    <div class="container text-left">
        <div class="row">
            <div class="col-12 col-sm-6 p-3 ">
                <h4>Edit customer account data:</h4>
                <form class="text-begin p-2" action="<?= URL ?>customers/save" method="post">
                    <p class="pt-2">Name:</p>
                    <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="name" class="form-control" placeholder="Name">
                    <p class="pt-2">Surname:</p>
                    <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="surname" class="form-control" placeholder="Surname">
                    <p class="pt-2">Personal ID:</p>
                    <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="personal_id" class="form-control" placeholder="Personal ID">
                    <div class="col-12 col-sm-6 pt-3 ">
                        <button type="submit" class="btn btn-outline-success ">Save edit</button>
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