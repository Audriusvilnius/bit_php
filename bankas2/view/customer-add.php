<h1>Prideti</h1>

<form action="<?= URL ?>customers/update/<?= $customer['id'] ?>" method="post">

    <div>Pavadinimas<input type="text" name="title" value="<?= $customer['name'] ?>"></div>
    <div>Spalva<input type="text" name="color" value="<?= $customer['surname'] ?>"></div>
    <div>Svoris<input type="text" name="weight" value="<?= $customer['weight'] ?>"></div>

    <button type="submit">Taip</button>

</form>
<?php foreach ($customers as $customer) : ?>
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

<?php endforeach ?>



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
        <div class="col-12 col-sm-6 p-3 mt-3" style="background-color:rgba(72, 67, 67, 0.303);border: 2px solid black;border-radius: 30px; ">
            <h4 class="fs-5 fw-lighter m-3">Customer id:<span class="fs-4 fw-light"> &nbsp;<?= $customers['id'] ?> </span></h4>
            <h2 class="border-bottom m-3"></h2>
            <h5 class="fs-6 fw-lighter m-3">Name:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$customers['name'] ?></span></h5>
            <h5 class="fs-6 fw-lighter m-3">Surname:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$customers['surname']?></span></h5>
            <h5 class="fs-6 fw-lighter m-3">Personal ID:<span class="fs-5 fw-light">&nbsp;&nbsp;&nbsp;<?=$customers['personal_id'] ?></span></h5>
            <h2 class="m-3 border-bottom"></h2>
            <h5 class="fs-6 fw-lighter m-3">Account No.:<span class="fs-5 fw-light float-end">&nbsp;&nbsp;<?=$customers['account'] ?></span></h5>
            <h5 class="fs-6 fw-lighter m-3">Balance:<span class="fs-5 fw-light float-end">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$customers['balance']?>&nbsp;&nbsp;Eur. </span></h5>
            <div class="btn-group me-2 m-3" role="group">
                <div class="btn-group me-2" role="group"><a href="<?=URL . 'customers/edit/' . $customers['id']?>">
                        <button class="btn btn-outline-warning me-2">Edit</button></a>
                    <form action="<?=URL . 'customers/delete/' . $customers['id']?>" method="post"><button class="btn btn-outline-danger pr-2" type="submit">Delet</button></form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>