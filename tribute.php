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
    }
    </style>
<body>
<?php include('navbar.php');?>

<div class="jumbotron" style="margin-top: -20px; background: lightcyan">
  <h1>Tribute</h1>      
  <p>Suatu bentuk apresiasi kami bagi mahasiswa Universitas Muhammadiyah Prof. Dr. Hamka</p>
</div>
<div style="text-align: center">
<h2>Daftar Mahasiswa <strong>Berprestasi </strong><sup><span class="label label-danger ">!</span></sup></h2>
</div>
<div class="container">

<hr class="featurette-divider">

<div class="row featurette" style="background-color:honeydew ; padding:25px; border:5px solid; border-radius: 15px; border-color: lightgrey">
  <div class="col-md-7">
    <h2 class="featurette-heading">Dafi Mu'ammar Zulfikar. <span class="text-muted">Lulusan Terbaik Tahun 2022.</span></h2>
    <p class="lead">Semangat untuk adik-adikku tercinta khususnya mahasiswa FT UHAMKA dan umumnya seluruh mahasiswa UHAMKA, jangan pernah takut untuk mencoba karena dengan mencoba hal baru kita akan mendapatkan pelajaran dan pengalaman berharga.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive center-block" src="asset/img/1520149535334.jpg" alt="Generic placeholder image">
  
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 col-md-push-5">
    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5 col-md-pull-7">
    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div>
</div>

<hr class="featurette-divider">

    </div>

<?php include('footer.php') ?>
</body>
</html>