<!-- <footer class="footer" style="background-color:black; margin-top:30px; padding:20px">
        <div class="container-fluid" style="display: flex;">
            <div style="width: 50%; display:flex; border-right:2px solid white">
                <div style="width:18%">
                <img src="asset/img/logo.png" style="width: 100px; height:100px; margin-top:-6px; margin-right:5px">
                </div>
                <div style="width:82%">
                <h3 style="color: whitesmoke;"> Mahasiswa & Alumni <br>
                Universitas Muhammadiyah Prof. Dr. Hamka</h3><br>
                </div>
            </div>
            <div style="width: 50%; margin-left:20px">
            <h4 class="text-muted">
                &copy Mahasiswa & Alumni UHAMKA <br>
            </h4>
            <i class="fa fa-whatsapp fa-fw"></i> 021-47293102 |
            <i class="fa fa-facebook fa-fw"></i> MAUP |
            <i class="fa fa-twitter fa-fw"></i> @MAUP |
            <i class="fa fa-google fa-fw"></i> maup@gmail.com |
            <i class="fa fa-youtube fa-fw"></i> MAUP OFFICIAL |
            </div>
        </div>
    </footer> -->

    <footer class="footer" style="background-color:black; margin-top:30px; padding:20px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" >
                    <div class="col-md-3" style="text-align:center;margin-top:30px">
                            <img src="asset/img/logo.png" style="width: 100px; height:100px; margin-top:-6px; margin-right:5px">
                            <h3 style="color: whitesmoke;"> Mahasiswa & Alumni <br>
                            Universitas Muhammadiyah Prof. Dr. Hamka</h3><br>
                            <i class="fa fa-whatsapp fa-fw"></i> 021-47293102 |
                            <i class="fa fa-facebook fa-fw"></i> MAUP |
                            <i class="fa fa-twitter fa-fw"></i> @MAUP | <br>
                            <i class="fa fa-google fa-fw"></i> maup@gmail.com |
                            <i class="fa fa-youtube fa-fw"></i> MAUP OFFICIAL |                        
                    </div>
                    <div class="col-md-6" style="border-left:2px solid grey;border-right:2px solid grey;">
                        <iframe style="border-radius: 20px; margin:0px 35px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126901.58920035757!2d106.80305242538452!3d-6.306404911652955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5335b6a07b391447!2sUHAMKA%20Fakultas%20Teknik!5e0!3m2!1sid!2sid!4v1611586579431!5m2!1sid!2sid" width="90%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-md-3" style="margin-left: 0px;">
                    <h2 style="color:white">Saran & <strong>Masukan </strong></h2>
                    <hr style="border-top: 2px solid aliceblue; width:80%; text-align:left; margin-left:0px">    
                    <form class="form-horizontal" action="index.php" method="POST">
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
                        <label class="control-label col-sm-2" for="telp">Pesan:</label>
                        <div class="col-sm-10">
                            <textarea name="pesan" id="pesan" cols="30" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name='kirim' class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                    </form> 
                    <?php 
                        if(isset($_POST['kirim'])){
                            require_once('config.php');

                            $nama = $_POST['nama'];
                            $email = $_POST['email'];
                            $pesan = $_POST['pesan'];

                            $sql = "insert into saran values ('', '$nama', '$email', '$pesan')";
                            $query = mysqli_query($db, $sql);
                            echo "<script>alert('Sukses, Terimakasih atas saran dan masukan yang telah diberikan')</script>";
                        }
                    ?>
                    </div>
                    <h5>&copy Mahasiswa & Alumni 2020 - Kiamat</h5>
                    <h5>Background by svgbackgrounds.com</h5>
                </div>
            </div>
        </div>
    </footer>