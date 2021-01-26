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
        background-color: #77aa77 ;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 2 1'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%2377aa77'/%3E%3Cstop offset='1' stop-color='%234fd'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='0' y2='1'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='2' y2='2'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='2' height='1'/%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23b)' points='0 1 0 0 2 0'/%3E%3Cpolygon fill='url(%23c)' points='2 1 2 0 0 0'/%3E%3C/g%3E%3C/svg%3E");
        background-attachment: fixed;
        background-size: cover;
        /* background by SVGBackgrounds.com */
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

    <?php include('navbar.php');?>
    
    <div class="jumbotron" style="margin: 20px; background:aliceblue">
        <div class="container">
            <h1><b>Official Website</h1>
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

            $sql = "SELECT * FROM `posting` Where kategori='terbaru' ORDER BY created_at asc limit 5";
            $query = mysqli_query($db, $sql);
            
        ?>
            <div class="row">
                <div class="col-md-9">
                    <div style="background-color: whitesmoke;padding:20px;margin: -10px 0px 20px 0px; border-radius:10px">
                <?php while($data = mysqli_fetch_array($query)){ ?>
                    <div class="panel panel-default">
                        <a href="article.php?id=<?= $data['id']  ?>">
                            <div class="panel-body" style="display:flex">
                                <div class="col-md-4">
                                    <img src="asset/img/uploads/<?= $data['img']?>" style="width: 300px;height:200px">
                                </div>
                                <div class="col-md-7">
                                    <h3><?= $data['judul'] ?></h3>
                                    <h5><i class="fa fa-edit fa-fw"></i> <?= $data['created_at'] ?></h5>     
                                    </div>
                            </div>                    
                        </a>
                    </div>
    
                <?php } ?>
                <a href="allArticle.php" style=" color:black"><h4>Lihat Selengkapnya  <i class="fa fa-angle-double-right  fa-fw"></i></h4></a>
                <hr style="border-top: 5px solid blue; width:30%; text-align:left; margin-left:0px">
                </div>
                </div>
            <div class="col-md-3 "style="margin-top: 0px;">
                <h2>Informasi <strong>Penting </strong><sup><span class="label label-danger ">1</span></sup></h2>
                <hr style="border-top: 2px solid aliceblue; width:80%; text-align:left; margin-left:0px">    
                <div class="panel panel-primary" >
                        <div class="panel-heading"><h3>Call for <strong> Humanity</strong></h3></div>
                        <div class="panel-body">
                        <p>Halo orang-orang baik! Kami percaya kalian yang memiliki keinginan berbuat baik, menyempatkan diri mencari peluang untuk menjadi relawan, hingga akhirnya sampai membaca tulisan ini. Anda pasti adalah orang-orang baik yang sedang Indonesia butuhkan</p>
                        <a href="baksos.php"><button class="btn btn-success">Join Us</button> </a>
                        </div>
                    </div>
                <div>
            </div>
            </div>
    </div>
    </div>
    <?php include('footer.php') ?>    
</body>
</html>