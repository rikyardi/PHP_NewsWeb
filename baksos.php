<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership & Giving</title>
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

    <div class="jumbotron" style="text-align: left; margin: 0px auto; margin-top:-20px; background: lightcyan;">
        <h1>Pray For Indonesia in 2021</h1>
        <p>Mahasiswa Peduli kemanusiaan, wadah bagi siapa saja yang ingin membantu saudara-saudara kita yang sedang diterpa bencana alam.</p>
    </div>



<div style= "margin : 0px auto; margin-top:-20px">
  <h2></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="asset/img/gunungmeletus.jpg" alt="Semeru" style="width:100%;">
        <div class="carousel-caption">
          <h2>Gunung Semeru</h2>
          <p>Pray For Indonesia!</p>
        </div>
      </div>

      <div class="item">
        <img src="asset/img/banjir.jpg" alt="Kalsel" style="width:100%;">
        <div class="carousel-caption">
          <h2>Kalimantan Selatan</h2>
          <p>Pray for Indonesia!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="asset/img/longsorsumedang.jpg" alt="Sumedang" style="width:100%;">
        <div class="carousel-caption">
          <h2>Sumedang</h2>
          <p>Pray For Indonesia!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<footer class="footer" style="background-color:black; ">
        <div class="container">
            <h3 class="text-muted">
                &copy Mahasiswa & Alumni UHAMKA <br>
            </h3>
            <i class="fa fa-whatsapp fa-fw"></i> 021-47293102 |
            <i class="fa fa-facebook fa-fw"></i> MAUP |
            <i class="fa fa-twitter fa-fw"></i> @MAUP |
            <i class="fa fa-google fa-fw"></i> maup@gmail.com |
            <i class="fa fa-youtube fa-fw"></i> MAUP OFFICIAL |
        </div>
    </footer>

    
</body>
</html>