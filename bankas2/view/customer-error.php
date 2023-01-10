<div class="container text-left">
    <div class="row">
        <div class="col-12 col-sm-6 p-3 ">
            <?php
                if (isset($customers['error']));{
                    echo'<div style="background-color: #f44336;padding: 5px;border-radius:5px; "><h4 class="text-center fs-5 fw-lighter m-3">Incorect user data! Please check user '.$customers['error'].':</h4></div>';
                } ?>
            <form class="text-begin p-2" action="<?= URL ?>customers/save" method="post">
                <p class="pt-2">Name:</p>
                <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="name" class="form-control" placeholder="Name" value="<?= $customers['name'] ?>">
                <p class="pt-2">Surname:</p>
                <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="surname" class="form-control" placeholder="Surname">
                <p class="pt-2 ">Personal ID:</p>
                <input class="col-8 col-sm-11 col-lg-auto mb-1 mb-lg-12 me-lg-10" type="text" name="personal_id" class="form-control" placeholder="Personal id">
                <div class="col-12 col-sm-6 pt-3 ">
                    <button class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-sm-6 p-3 mt-3" style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px; ">
            <h4 class="fs-5 fw-lighter m-3">Customer id:<span class="fs-4 fw-light"> &nbsp;<?= $customers['id'] ?>
                </span></h4>
            <h2 class="border-bottom m-3"></h2>
            <h5 class="fs-6 fw-lighter m-3">Customer No.:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$customers['cust_id'] ?></span>
            </h5>
            <h5 class="fs-6 fw-lighter m-3">Name:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$customers['name'] ?></span>
            </h5>
            <h5 class="fs-6 fw-lighter m-3">Surname:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$customers['surname']?></span></h5>
            <h5 class="fs-6 fw-lighter m-3">Personal ID:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;<?=$customers['personal_id'] ?></span></h5>
            <h2 class="m-3 border-bottom"></h2>
            <h5 class="fs-6 fw-lighter m-3">Account No.:<span class="fs-5 fw-light float-end">&nbsp;&nbsp;<?=$customers['account'] ?></span></h5>
            <h5 class="fs-6 fw-lighter m-3">Balance:<span class="fs-5 fw-light float-end">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$customers['balance']?>&nbsp;&nbsp;&euro;
                </span></h5>

        </div>
    </div>
</div>
</body>