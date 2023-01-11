<div class="px-4 py-8 my-2 text-center">
    <h1 class="display-5 fw-lighter mb-4">Tavo svajoniu Bankas!</h1>
    <img style="filter: invert(60%);" class="d-block mx-auto mb-4" src="http://bankasdu.lt/img_464486.png" alt="pig" height="350">
    <h2 class="display-5 fw-lighter mb-4">Ragai ir Kanopos
    </h2>
    <div class="col-lg-6 mx-auto">
        <form action="<?= URL . 'customers/login/' . $customer['psw'] ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="psw" class="form-control" placeholder="password">
                <button type="submit" class="btn btn-outline-info mt-4">Login</button>
            </div>
        </form>
    </div>
</div>
</body>