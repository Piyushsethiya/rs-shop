<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R&S-Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="<?php echo base_url('assets/image/main_logo.jpg'); ?>" type="image/jpg" />

    <style>
        .main-logo {
            width: 100px;
            height: 80px;
            border-radius: 10px ;
            border: 5px double black;
            margin-bottom: 20px;
        }

        .login_des {
            background-color: #abababab;
            border-radius: 1rem 1rem 0 0;
            border-bottom: 3px double #00000085;
            padding: 45px 0;
            margin: -77px -50px 30px -50px;
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background-image: linear-gradient(to right, #0000ff69, #ff00006b, #8282005c);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <?php
                        if (!empty($this->session->flashdata('success'))) { ?>
                            <h4 class="alert alert-success" style="text-align: center">
                                <b><?php print_r($this->session->flashdata('success')); ?></b>
                            </h4>

                        <?php } else { ?>
                            <h4 style="text-align: center; margin-top: 20px">
                                <b><?php print_r($this->session->flashdata('error')); ?></b>
                            </h4>
                        <?php } ?>
                        <form action="<?php echo base_url('loginc/signin') ?>" method="POST">
                            <div class="card-body p-5 text-center">
                                <div class="login_des">
                                    <img class="main-logo" src="<?php echo base_url() . 'assets/image/main_logo.jpg' ?>"
                                        alt="logo">
                                    <h4>R & S Merchant Store</h4>
                                    <!-- <a href="" class="img logo rounded-circle mb-5" style="background-image: url()"></a> -->
                                </div>
                                <!-- <h3 class="mb-5">Sign in</h3> -->

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="Email">Email</label>
                                    <input type="email" id="Email" class="form-control form-control-lg" name="email" />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="Password">Password</label>
                                    <input type="password" id="Password" class="form-control form-control-lg"
                                        name="password" />
                                </div>
                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>