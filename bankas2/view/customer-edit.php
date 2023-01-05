<h1>Redagavimas</h1>
<?=print_r($userData)?>
<?=print_r($data)?>


<form action="<?= URL ?>customers/update/<?= $customers['id'] ?>" method="post">
    <div>Name<input type="text" name="name" value="<?= $customers['name'] ?>"></div>
    <div>Surname<input type="text" name="name" value="<?= $customers['surname'] ?>"></div>
    <div>id<input type="text" name="id" value="<?= $customers['id'] ?>"></div>
    <div>personal_id<input type="text" name="personal_id" value="<?= $customers['personal_id'] ?>"></div>
    <div>id<input type="text" name="account" value="<?= $customers['account'] ?>"></div>

    <button type="submit">Taip</button>
</form>



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
                    <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" value="<?= $customers['Personal id'] ?>" name="personal_id" class="form-control" placeholder="Personal id">
                    <div class="col-12 col-sm-6 pt-3 ">
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
            foreach ($customers as $user) {
                if ($customers['id']==$user){
                echo '<div class ="col-12 col-sm-6 p-3 " style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px;">';
                        echo '<h4>Customer id:  ' . "&nbsp;&nbsp;&nbsp;" . $user['id'] . '</h4>';
                        echo '<p>Account Nr:  </p>' . '<h5>'  . $user['account'] . '</h5>';
                        echo '<p>Balace:   </p>' . '<h4>' . $user['balance'] .
                            '</h4>';
                        echo '<h3> Name:' . '<span style="color: skyblue;">&nbsp;&nbsp;&nbsp;' . $user['name'] . '</span></h3>';
                        echo '<p> Surname: ' . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $user['surname'] . '</p>';
                        echo '<p>  Personal id:' . "&nbsp;&nbsp;&nbsp;" . "\n" . $user['personal_id'] . '</p></div>';
                        echo '<div class="btn-group me-2" role="group" ><a href="'.URL . 'customers/update/' . $user['id'].'">
                        <button class="btn btn-outline-warning me-2">Edit</button></a>';
                        echo '<form action="'.URL . 'customers/delete/' . $user['id']. '" method="post"><button class="btn btn-outline-danger pr-2" type="submit">Delet</button></form></div></div>';
                break;
            }}
            echo '</div>';
            ?>
        </div>
    </div>
</body>