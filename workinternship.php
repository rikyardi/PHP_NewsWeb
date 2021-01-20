<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work & internship</title>
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
                        <a href="workinternship.php"><i class="fa fa-building fa-fw"></i> Work & Internship</a>
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
    <!-- blok besar -->
    <div class="jumbotron" style="text-align: center; margin: 25px; background: cornsilk;">
        <h1>Mahasiswa Bisa!</h1>
        <p class="lead">Informasi Lowongan kerja & Magang untuk mahasiswa-mahasiswa terbaik UHAMKA</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>


<!-- blok magang and pekerjaan -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
        <div style="background-color: #FFFACD;padding:20px;margin: -10px 0px 20px 0px; border-radius:10px; text-align : center">
          <h2>Yuk Magang!</h2>
          <p class="text-danger">Mari Magang demi memenuhi syarat kelulusan</p>
          <p>Magang, atau dikenal dengan sebutan internship adalah penempatan kerja dengan perusahaan atau organisasi yang memberikan pengalaman kerja dan keahlian baru, yang dapat berguna untuk karir masa depan. Tujuan dari magang adalah memberikan kesempatan bagi mahasiswa untuk menerapkan apa yang mereka pelajari di ruang kelas ke dunia riil, supaya mereka lebih siap kerja setelah lulus nanti. </p>
          <p><a class="btn btn-primary" href="#" role="button">Lihat Lebih Lanjut &raquo;</a></p>
        </div>
        </div>

        <div class="col-lg-6">
        <div style="background-color: #FFFACD ;padding:20px;margin: -10px 0px 20px 0px; border-radius:10px; text-align: center"> 
            <h2>Yuk Kerja!</h2>
                <p class="text-danger">Semua Bisa Kerja</p>
                <p></p>
                <p> </p>
                <a class="btn btn-primary" href="#" role="button">Lihat Lebih Lanjut &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer" style="background-color:black; ">
        <div class="container">
            <h4 class="text-muted">
                &copy Mahasiswa & Alumni UHAMKA <br>
            </h4>
            <i class="fa fa-whatsapp fa-fw"></i> 021-47293102 |
            <i class="fa fa-facebook fa-fw"></i> MAUP |
            <i class="fa fa-twitter fa-fw"></i> @MAUP |
            <i class="fa fa-google fa-fw"></i> maup@gmail.com |
            <i class="fa fa-youtube fa-fw"></i> MAUP OFFICIAL |
        </div>
    </footer>
</body>
</html>