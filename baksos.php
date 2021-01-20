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
        <a class="navbar-brand" href="#" style="padding: 5px;display:flex">
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
                        <a href="scholarship.php"><i class="fa fa-graduation-cap fa-fw"></i> Scholarship</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-trophy fa-fw"></i> Tribute</a>
                    </li>
                    <li>
                        <a href="workinternship.php"><i class="fa fa-building fa-fw"></i> Work & internship</a>
                    </li>
                </ul>
            </li>
            <li><a href="baksos.php">Membership & Giving</a></li>
            <li class="dropdown" data-target="dropdownAbout">
                <a class="dropdown-toggle" data-toggle="dropdown" target="dropdownAbout" href="#">About Us</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-institution fa-fw"></i> Profil</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-history fa-fw"></i> Sejarah</a>
                    </li>
                </ul>
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

    <div class="jumbotron" style="text-align: left; margin: 25px 25px; background: lightcyan;">
        <h1>Pray For Indonesia in 2021</h1>
        <p>Mahasiswa Peduli kemanusiaan, wadah bagi siapa saja yang ingin membantu saudara-saudara kita yang sedang diterpa bencana alam.</p>
    </div>



<div class="container-fluid" style= "margin : 50px 50px">
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