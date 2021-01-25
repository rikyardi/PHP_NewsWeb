<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistem Informasi</title>
        <?php include('resources.php') ?> 
        <script type="text/javascript">
        function validasi() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;		
            if (email != "" && password!="") {
                return true;
            }else{
                alert('Email dan Password harus di isi !');
                return false;
            }
        }
</script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="index.php" onsubmit="return validasi()">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" id="email" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-lg btn-success btn-block" name="btn">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

    require_once('config.php');
    
    if(isset($_POST['btn'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `admin` WHERE email='$email' and password='$password'";
        $query = mysqli_query($db, $sql);
        $cek = mysqli_num_rows($query);
        $data = mysqli_fetch_array($query);
        
        if ($cek > 0) {
            session_id('admin');
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['status'] = "Login";
            $_SESSION['nama'] = $data['nama'];
            header("location:posting.php");
            exit();
        }else{
            echo "<script>alert('Gagal Login, silahkan cek kembali email dan password anda')</script>";
        }
    }
?>
    </body>
</html>
