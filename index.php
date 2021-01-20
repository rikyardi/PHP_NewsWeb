<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web</title>
    <?php include('resources.php') ?>
</head>
<style>
    body{
        background-color: #77aa77;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 2 1'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%2377aa77'/%3E%3Cstop offset='1' stop-color='%234fd'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='0' y2='1'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='2' y2='2'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='2' height='1'/%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23b)' points='0 1 0 0 2 0'/%3E%3Cpolygon fill='url(%23c)' points='2 1 2 0 0 0'/%3E%3C/g%3E%3C/svg%3E");
        background-attachment: fixed;
        background-size: cover;
    }

    .panel-body img:hover{
    /* transform: scale(1.5); */
    position: relative;
    animation: zoom 5s;
    }


    @keyframes zoom {
        0%   {scale: 1.0;}
        25%  {scale: 1.1;}

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
    
    <div class="jumbotron" style="margin: 20px; background:aliceblue">
        <div class="container">
            <h1><b>Official Account</h1>
            <h2>Mahasiswa & Alumni UHAMKA</b></h2>
            <p>Selamat datang di sistem informasi mahasiswa dan alumni UHAMKA yang dapat membantu anda lebih baik dan memudahkan anda dalam mencari informasi</p>
        </div>
    </div>
    <div style="padding:20px 0px 20px 20px">
    <h2>Informasi <strong>Terbaru </strong><sup><span class="label label-danger">New</span></sup></h2>
    <hr style="border-top: 2px solid aliceblue; width:30%; text-align:left; margin-left:0px">
    </div>
    <div class="container-fluid">
        <?php
            include('config.php');

            $sql = "SELECT * FROM posting";
            $query = mysqli_query($db, $sql);
            
        ?>
            <div class="row">
                <div class="col-md-8">
                    <div style="background-color: whitesmoke;padding:20px;margin: -10px 0px 20px 0px; border-radius:10px">
                <?php while($data = mysqli_fetch_array($query)){ ?>
                    <div class="panel panel-default">
                        <a href="article.php?id=<?= $data['id']  ?>">
                            <div class="panel-body" style="display:flex">
                                <div style="display: flex;width:40%">
                                    <img src="asset/img/uploads/<?= $data['img']?>" style="width: 300px;height:200px">
                                </div>
                                <div style="display:flex;width:60%">
                                    <h3><?= $data['judul'] ?></h3></div>
                                </div>                    
                        </a>
                    </div>
    
                <?php } ?>
                </div>
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