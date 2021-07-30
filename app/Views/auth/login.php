<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url("Assets") ?>/scss/main.css">
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sajianku | Login</title>
</head>

<body>
    <div class="d-flex vh-100 justify-content-center align-items-center auth">
        <div class="row w-75 align-items-center shadow">
            <div class="col-md-6" style="padding: 0;">
                <img src="<?= base_url('Assets') ?>/images/login.jpeg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6" style="padding: 0 50px;">
                <form action="/login" method="post">
                    <?= csrf_field(); ?>
                    <div class="sidebar-heading text-center">
                        <h2 class="m-0 text-custom"> <img src="<?= base_url('Assets') ?>/images/logo.png" alt="logo" width="53.143px" st>Sajianku</h2>
                        Sign into your account

                        <?php
                        if (session()->getFlashdata('error')) :
                        ?>

                            <div class="alert alert-danger mt-4" role="alert">
                                <?= session()->getFlashdata('error') ?>
                            </div>

                        <?php
                        endif;
                        ?>

                    </div>
                    <div class="mb-1 mt-3">
                        <label for="username" class="form-label "></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password" required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <div class="d-grid mt-5">
                        <button type="submit" class="btn btn-custom">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>