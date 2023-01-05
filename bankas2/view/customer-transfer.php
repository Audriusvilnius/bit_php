<body class="p-2 bg-dark text-white">
    <div class="container text-left">
        <div class="row">
            <div class="col-12 col-sm-6 p-3 ">
                <h4>Customer transfer operation:</h4>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="text-begin p-2 " action="<?= URL . 'customers/plius/' . $customers['id'] ?>" method="post">
                            <input class="col-8 col-sm-11 col-lg-auto mb-2 mb-lg-12 me-lg-10 " type="text" name="pinigai" class="form-control" placeholder="Add sum">
                            <button type="submit" class="btn btn-outline-info" style="--bs-btn-padding-y: .30rem; --bs-btn-padding-x: .9rem; --bs-btn-font-size: .90rem;">Credit</button>
                        </form>
                    </div>
                    <div class="container-fluid">
                        <form class="text-begin p-2 " action="<?= URL . 'customers/plius/' . $customers['id'] ?>" method="post">
                            <input class="col-8 col-sm-11 col-lg-auto mb-2 mb-lg-12 me-lg-10 " type="text" name="pinigai" class="form-control" placeholder="Add sum">
                            <button type="submit" class="btn btn-outline-warning" style="--bs-btn-padding-y: .30rem; --bs-btn-padding-x: .9rem; --bs-btn-font-size: .90rem;">Debit&nbsp; </button>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="col-12 col-sm-6 p-3 mt-3" style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px; ">
                <h4 class="fs-5 fw-lighter m-3">Customer id:<span class="fs-4 fw-light"> &nbsp;<?= $customers['id'] ?> </span></h4>
                <h2 class="border-bottom m-3"></h2>
                <h5 class="fs-6 fw-lighter m-3">Name:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$customers['name'] ?></span></h5>
                <h5 class="fs-6 fw-lighter m-3">Surname:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$customers['surname']?></span></h5>
                <h5 class="fs-6 fw-lighter m-3">Personal ID:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;<?=$customers['personal_id'] ?></span></h5>
                <h2 class="m-3 border-bottom"></h2>
                <h5 class="fs-6 fw-lighter m-3">Account No.:<span class="fs-5 fw-light float-end">&nbsp;&nbsp;<?=$customers['account'] ?></span></h5>
                <h5 class="fs-6 fw-lighter m-3">Balance:<span class="fs-5 fw-light float-end">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$customers['balance']?>&nbsp;&nbsp;Eur. </span></h5>
            </div>
        </div>
</body>