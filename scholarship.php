<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship</title>
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
    
    <div class="jumbotron" style="text-align: right; margin: 25px; background: mintcream;">
        <h1>Scholarship</h1>
        <p class="lead">Informasi Beasiswa terkini.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
      </div>

    <div class="container">
    
    <div class="container marketing">
    <div style="background-color: honeydew; padding:25px ;margin: 20px 10px; border-radius:15px; text-align:center">
      <!-- Three columns of text below the carousel -->
      <div class="row">
      
        <div class="col-lg-4">
          <img class="img-circle" src="asset/img/lazismu.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Beasiswa Lazismu</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><button  class="btn btn-info" data-toggle="collapse" data-target="#lazis"><i class="fa fa-eye fa-fw"></i> View Details</button></p>
          <div id="lazis" class="collapse">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="asset/img/baznas.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Beasiswa Baznas</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><button  class="btn btn-info" data-toggle="collapse" data-target="#sholawat"><i class="fa fa-eye fa-fw"></i> View Details</button></p>
          <div id="sholawat" class="collapse">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="asset/img/muhammadiyah.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Beasiswa Muhammadiyah</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><button  class="btn btn-info" data-toggle="collapse" data-target="#muhammadiyah"><i class="fa fa-eye fa-fw"></i> View Details</button></p>
          <div id="muhammadiyah" class="collapse">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
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