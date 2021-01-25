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
        /* background by SVGBackgrounds.com */
    }
    </style>
<body>

<?php include('navbar.php');?>

    <div class="jumbotron" style="text-align: left; margin: 0px auto; margin-top:-20px; background: lightcyan;">
        <h1>Pray For Indonesia in 2021</h1>
        <p>Mahasiswa Peduli kemanusiaan, wadah bagi siapa saja yang ingin membantu saudara-saudara kita yang sedang diterpa bencana alam.</p>
        <p><a class="btn btn-lg btn-success" href="#news" role="button">News</a></p>
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
          <h2>Erupsi Gunung Api</h2>
          <p>Pray For Indonesia!</p>
        </div>
      </div>

      <div class="item">
        <img src="asset/img/banjir.jpg" alt="Kalsel" style="width:100%;">
        <div class="carousel-caption">
          <h2>Banjir Kalimantan Selatan</h2>
          <p>Pray for Indonesia!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="asset/img/longsorsumedang.jpg" alt="Sumedang" style="width:100%;">
        <div class="carousel-caption">
          <h2>Longsor Sumedang</h2>
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

<section id="news">
<div class="row">
  <h1 style="text-align:center; margin-top : 50px">Indonesia <strong>Darurat </strong><sup><span class="label label-danger">!</span></sup></h1>
    <div class="col-md-10" >
      
      <?php 
        require_once('config.php');

        $sql = "SELECT * FROM `posting` Where kategori='baksos' ORDER BY created_at asc limit 5";
        $query = mysqli_query($db, $sql);
        while($data = mysqli_fetch_array($query)){
      ?>
        <div class="panel" style="background-color:aliceblue ;padding:25px ;margin: 20px 20px; border-radius:15px;">
          <h1><?= $data['judul'] ?></h1>
          <p><?= $data['created_at'] ?></p>
          <blockquote>
            <p><?= $data['artikel']?></p>
          </blockquote>
        </div>
      <?php } ?>
      </div>
      
      <div class="col-md-2" style="margin-top: 20px;margin-left:-20px">
          <h2 style="text-align: center;">Bantu <strong>Kami </strong></h2>
          <hr>
        <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">Daftar Relawan</button><br>
        <!--  -->
          <a href="https://kitabisa.com/" style="text-decoration:none"><button type="button" class="btn btn-success btn-lg btn-block">Donasi Sekarang</button></a>
      </div>
    </section>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pendaftaran Relawan</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="baksos.php" method="POST">
              <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="notelp">No. Telp:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="notelp" name="notelp" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="ttl">Tempat, Tgl Lahir:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Bogor, 1 Januari 2000" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="asal">Asal Kota</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="asal" name="asal" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10" style="text-align: right;">
                  <button type="submit" name='daftar' class="btn btn-primary" style="padding:10px 20px">Daftar</button>
                </div>
              </div>
            </form> 
          </div>
          <?php 
            if(isset($_POST['daftar'])){
              require_once('config.php');

              $nama = $_POST['nama'];
              $email = $_POST['email'];
              $alamat = $_POST['alamat'];
              $notelp = $_POST['notelp'];
              $ttl = $_POST['ttl'];
              $asal = $_POST['asal'];
              
              $sql = "insert into membership values ('', '$nama', '$alamat', '$notelp', '$ttl', '$asal', '$email')";
              $query = mysqli_query($db, $sql);
              echo "<script>alert('Sukses Mendaftar. Selanjutnya nanti anda akan dihubungi oleh admin kami')</script>";
            }
          
          ?>
        </div>
        <!--  -->
      </div>
    </div>
    <!--  -->

</div>
<?php include('footer.php') ?>

    
</body>
</html>