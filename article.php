<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web</title>
    <?php include('resources.php') ?>
    <style>
        p > img{
            max-width: 100%;
            height: auto !important;
        }
    </style>
</head>
<body>
        <?php include('navbar.php') ?>
    <div class="container-fluid" style="margin-left: 70px;">
        <div class="col-md-8">
        <?php
        require_once('config.php');

        $id = $_GET['id'];
        $sql = "SELECT * FROM posting where id='$id'"; 
        $query = mysqli_query($db, $sql);
        $data = mysqli_fetch_array($query); ?>
        <!-- <img src="admin/kcfinder/upload/images/"> -->
        <h2><?= $data['judul'] ?></h2>
        <h5><?= $data['created_at'] ?></h5>
        <hr>
        <p><?= $data['artikel'] ?></p>
        <h3>Bagikan Informasi Ini </h3>
        <hr style="border-top: 3px solid grey;">
        <h1>
        <a href=""><i class="fa fa-facebook fa-fw"></i></a>
        <a href=""><i class="fa fa-twitter fa-fw"></i></a>
        <a href=""><i class="fa fa-google fa-fw"></i></a> 
        <a href=""><i class="fa fa-telegram fa-fw"></i></a>
            </h1>
        </div>
    </div>
<?php include('footer.php')?>

</body>
</html>