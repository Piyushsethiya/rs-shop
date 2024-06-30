<?php
// print_r($c_count[0]['COUNT(id)']);die();
?>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5">
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
    <!-- <div class="container-fluid"> -->

    <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button> -->

    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div> -->
    <!-- </nav> -->

    <h2 class="mb-4">Welcome YOU!</h2>
    <br>
    <div class="cards" style="display:flex; justify-content: space-evenly;">
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <h5 style="color: tomato">Total Customer</h5>
            </div>
            <?php foreach ($c_count as $count) { ?>
                <div class="card-body">
                    <p class="card-text" style="text-align:center; font-size: 20px"><?php echo $count['customer_count']; ?>
                    </p>
                </div>
            <?php } ?>
        </div>

        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <h5 style="color: tomato">Total Dealer</h5>
            </div>
            <?php foreach ($d_count as $count) { ?>
                <div class="card-body">
                    <p class="card-text" style="text-align:center; font-size: 20px"><?php echo $count['dealer_count']; ?>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>