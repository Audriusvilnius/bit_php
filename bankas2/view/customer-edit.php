<body class="p-2 bg-dark text-white">
    <div class="container text-left">
        <div class="row">
            <div class="col-12 col-sm-6 p-3 ">
                <h4>Edit customer account data:</h4>
                <form class="text-begin p-2" action="<?= URL . 'customers/update/' . $customers['id'] ?>" method="post">
                    <p class="pt-2">Name:</p>
                    <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="name" value="<?= $customers['name'] ?>" class="form-control" placeholder="Name">
                    <p class="pt-2">Surname:</p>
                    <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="surname" value="<?= $customers['surname'] ?>" class="form-control" placeholder="Surname">
                    <p class="pt-2">Personal ID:</p>
                    <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" value="<?= $customers['personal_id'] ?>" name="personal_id" class="form-control" placeholder="Personal id">
                    <div class="col-12 col-sm-6 pt-3 ">
                        <input type="hidden" name="account" value="<?= $customers['account'] ?>">
                        <input type="hidden" name="balance" value="<?= $customers['balance'] ?>">
                        <button type="submit" class="btn btn-outline-success ">Save edit</button>
                    </div>
                </form>
            </div>
            <?php
            echo '<div class ="col-12 col-sm-6 p-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px; " >';
            // if (isset($customer)) {
            //     '<div class="col-12 col-sm-6 pt-3 >';
            //     echo '<h3>New account:</h3>';
            //     '</div>';
            // }
            // foreach ($customers as $customer) {
                // if ($customers['id']==$customer){
                        echo '<h4>Customer id:  ' . "&nbsp;&nbsp;&nbsp;" . $customers['id'] . '</h4>';
                        echo '<p>Account Nr:  </p>' . '<h5>'  . $customers['account'] . '</h5>';
                        echo '<p>Balace:   </p>' . '<h4>' . $customers['balance'] .
                            ' Eur. </h4>';
                        echo '<h3> Name:' . '<span style="color: skyblue;">&nbsp;&nbsp;&nbsp;' . $customers['name'] . '</span></h3>';
                        echo '<p> Surname: ' . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $customers['surname'] . '</p>';
                        echo '<p>  Personal id:' . "&nbsp;&nbsp;&nbsp;" . "\n" . $customers['personal_id'] . '</p>';
                        echo '<div class="btn-group me-2" role="group" ><a href="'.URL . 'customers/edit/' . $customers['id'].'">
                        <button class="btn btn-outline-warning me-2">Edit</button></a>';
                        echo '<form action="'.URL . 'customers/delete/' . $customers['id']. '" method="post"><button class="btn btn-outline-danger pr-2" type="submit">Delet</button></form></div>';
                // break;
           // }
        // }
            echo '</div>';
            ?>
        </div>
    </div>
</body>