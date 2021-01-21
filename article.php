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
        <?= include('navbar.php') ?>
    <div class="container-fluid">
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
        </div>
    </div>
<?php include('footer.php')?>

</body>
</html>