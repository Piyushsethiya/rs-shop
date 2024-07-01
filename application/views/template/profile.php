<style>
    .container {
        width: 90%;
        height: 80%;
        background-color: #b1bfbd91;
        border-radius: 10px;
        border: 2px solid #88888875;
    }

    .image-set {
        float: inline-end;
        height: 230px;
    }

    .profile_image {
        margin: 3% 0 0 5%;
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }

    .p_contain {
        padding-top: 20px;
        width: calc(100% - 200px);
        border-right: 2px solid;
        padding-bottom: 50px;
    }

    .p_contain h4 {
        margin: auto;
        font-weight: 700;
        font-size: 17px;
    }

    .p_contain h4 span {
        font-family: Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 100;
        margin-left: 10px;
    }

    hr {
        margin-left: 0;

    }

    .container2 {
        border-bottom: 2px solid;
        margin: 0 -17px;

    }

    @media screen and (max-width: 770px) {
        .p_details {
            display: grid;
            justify-items: center;
            justify-content: center;
            padding-top: 20px;
        }

        .profile_image {
            width: 150px;
            height: 150px;
        }

        .image-set {
            border: none;
            border-bottom: 2px solid;
            /* margin: 0 -30px; */
            height: 180px;
            padding: 0 70px;
        }

        hr {
            border-bottom: 1px solid;
            padding: 0 100px;

        }

    }
</style>
<?php // print_r($_SESSION);die(); ?>
<div id="content" class="p-4 p-md-5">
    <h2 class="mb-4">Profile</h2>
    <div class="container">
        <div class="image-set">
            <img class="profile_image" src="<?= base_url() . 'assets/image/admin_logo.jpg' ?>" alt="profile image">
        </div>
        <div class="p_contain">
            <h4>Full Name: <input type="text" style="background-color: transparent; border: none"
                    value="<?php echo $_SESSION['name']; ?>"></input></h4>
            <hr>
            <h4>Email: <span><?php echo $_SESSION['email']; ?></span></h4>
            <hr>
            <h4>Phone Number: <span><?php echo $_SESSION['mobile_no']; ?></span></h4>
            <hr>
            <h4>Address: <span><?php echo $_SESSION['address']; ?></span></h4>
        </div>
        <div class="container2"></div>
    </div>
</div>
