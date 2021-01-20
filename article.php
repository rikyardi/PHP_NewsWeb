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
<nav class="navbar navbar-inverse" style="padding: 10px;" >
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="padding: 5px;display:flex">
            <div style="display: flex;">
            <img src="asset/img/logo.png" style="width: 50px; height:50px; margin-top:-6px; margin-right:5px">
            </div>
            <div style="display: flex;">
            <p> Mahasiswa & Alumni <br>
            Universitas Prof. Dr. Hamka</p>
            </div>
        </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Beranda<span class="sr-only">(current)</span></a></li>
            <li class="dropdown" data-target="dropdownMahasiswa">
                <a class="dropdown-toggle" data-toggle="dropdown" target="dropdownMahasiswa" href="#">Mahasiswa & Alumni</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> Scholarship</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-trophy fa-fw"></i> Tribute</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-building fa-fw"></i> Work & internship</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown" data-target="dropdownMember">
                <a class="dropdown-toggle" data-toggle="dropdown" target="dropdownMember" href="#">Membership & Giving</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-key fa-fw"></i> Pendaftaran & Login</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-medkit fa-fw"></i> Kegiatan Bakti Sosial</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown" data-target="dropdownAbout">
                <a href="about.php">About Us</a>
            </li>
        </ul>
        <form class="navbar-form navbar-right">
            <div class="form-group">
                <input type="text" class="form-control" onclick="searchLebar()" id="input" placeholder="Search" style="width:100px;">
            </div>
            <button type="submit" class="btn btn-default"><i class="fa fa-search fa-fw"></i></button>
        </form>
        <!-- <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Link </a></li>
        </ul> -->
        </div>
    </div>
    </nav>
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