<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web</title>
    <?php include('resources.php') ?>
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
            <li class="active"><a href="#">Beranda<span class="sr-only">(current)</span></a></li>
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
            <li><a href="#">Contact Us</a></li>
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
    
    <div class="jumbotron" style="margin: 20px;">
        <div class="container">
            <h1><b>Official Account</h1>
            <h2>Mahasiswa & Alumni UHAMKA</b></h2>
            <p>Selamat datang di sistem informasi mahasiswa dan alumni UHAMKA yang dapat membantu anda lebih baik dan memudahkan anda dalam mencari informasi</p>
        </div>
    </div>

    <div class="container-fluid">
        <?php
            include('config.php');

            $sql = "SELECT * FROM posting";
            $query = mysqli_query($db, $sql);
            
        ?>
            <div class="row">
                <div class="col-md-8">
                <?php while($data = mysqli_fetch_array($query)){ ?>
                    <div class="panel panel-default">
                        <div class="panel-heading"><?= $data['judul'] ?></div>
                        <div class="panel-body"><?= $data['deskripsi'] ?></div>
                        <div class="panel-footer">
                            <a href="article.php?id=<?= $data['id']  ?>">
                            <button class="btn btn-success">Lihat</button>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            <div class="col-md-4 " >
                <div class="panel panel-default">
                    <div class="panel-heading">title</div>
                    <div class="panel-body">body</div>
                    <div class="panel-footer">
                    <a href="">
                        <button class="btn btn-success">Lihat</button>
                    </a>
                </div>
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
    
<script>
    function searchLebar() {
        $input = document.getElementById('input');
        $input.style.width = "300px";   
    }
    function searchSempit() {
        $input = document.getElementById('input');
        $input.style.width = "100px";   
        
    }

</script>
</body>
</html>