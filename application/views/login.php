<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R&S-Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php if ($this->session->flashdata('error')){
        $this->session->flashdata('error');
        } ?>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <form action="<?php echo base_url('loginc/signin') ?>" method="POST">
                            <div class="card-body p-5 text-center">
                                <div class="main-logo">
                                    <!-- <img src="localhost:8080/shop/assets/image/main_logo.jpg" alt="logo"> -->
                                    <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(http://localhost:8080/shop/assets/image/main_logo.jpg)"></a>
                                </div>
                                <h3 class="mb-5">Sign in</h3>

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