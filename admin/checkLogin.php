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
            echo "GAGAL";
        }
        echo "Login dulu";
    }
?>