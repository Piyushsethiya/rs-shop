<?php
// print_r($_SESSION);die();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"
        type="text/javascript"></script>
    <script language="JavaScript"
        src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"
        type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost:8080/shop/assets/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- DATATABLES CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.bootstrap5.css">
    <!-- DATATABLES JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>

    <link rel="icon" href="http://localhost:8080/shop/assets/image/main_logo.jpg" type="image/jpg" />


</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <div style="background-color: dimgrey; border-radius: 10px; padding-top: 10px;">
                    <a href="<?php echo base_url('dashboardc'); ?>" class="img logo rounded-circle mb-5"
                        style="background-image: url(http://localhost:8080/shop/assets/image/admin_logo.jpg);"></a>
                    <div class="other_item" style="text-align: center;color: white;margin-top: -40px;">
                        <a href="<?php echo base_url('profilec'); ?>"><span style="font-size: 30px"
                                class="material-symbols-outlined">account_circle</span></a>
                        <a href="<?php echo site_url('Logoutc/logout'); ?>"><span
                                class="material-symbols-outlined">logout</span></a>
                    </div>
                    <p style="font-size: 15px; text-align: center;">
                        <span
                            style="color: #f8b739; font-size: 21px; margin-left: 10px;font-family: system-ui;"><?php echo ($_SESSION['name']); ?></span>
                    </p>
                </div>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="<?php echo base_url('dashboardc') ?>">Dashboard</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Customer</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="<?php echo base_url('userc') ?>">List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Dealer</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="<?php echo base_url('dealerc') ?>">List</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('accountc') ?>">Account</a>
                            </li>
                            <li>
                                <a href="#">Invoice</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <span style="float: inline-end;">
            <button type="button" id="sidebarCollapse" class="toggle-btn btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </span>