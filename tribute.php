<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tribute</title>
    <?php include('resources.php') ?>
</head>
<style>
    body{
        background-color: #77aa77;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 2 1'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%2377aa77'/%3E%3Cstop offset='1' stop-color='%234fd'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='0' y2='1'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='2' y2='2'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='2' height='1'/%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23b)' points='0 1 0 0 2 0'/%3E%3Cpolygon fill='url(%23c)' points='2 1 2 0 0 0'/%3E%3C/g%3E%3C/svg%3E");
        background-attachment: fixed;
        background-size: cover;
        /* background by SVGBackgrounds.com */
    }
    </style>
<body>
<?php include('navbar.php');?>

<div class="jumbotron" style="margin-top: -20px; background: lightcyan">
  <h1>Tribute</h1>      
  <p>Suatu bentuk apresiasi kami bagi mahasiswa Universitas Muhammadiyah Prof. Dr. Hamka</p>
</div>
<div style="text-align: center">
<h2> Mahasiswa <strong>Berprestasi </strong><sup><span class="label label-danger ">!</span></sup></h2>
</div>
<div class="container">
<?php 
  include('config.php');

  $sql = "SELECT * FROM `posting` Where kategori='tribute' ORDER BY created_at asc limit 5";
  $query = mysqli_query($db, $sql);
  while($data = mysqli_fetch_array($query)){
?>
<hr class="featurette-divider">
<div class="row featurette" style="background-color:honeydew ; padding:25px; border:5px solid; border-radius: 15px; border-color: lightgrey">
  <div class="col-md-7">
    <h2 class="featurette-heading"><?= $data['judul']?></h2>
    <p class="lead"><?= $data['artikel']?></p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive center-block" src="asset/img/uploads/<?=$data['img']?>" alt="Generic placeholder image">
  </div>
</div>
<?php } ?>
</div>
<?php include('footer.php') ?>
</body>
</html>