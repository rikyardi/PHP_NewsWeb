<?php
    include('config.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE email='$email' and password='$password'";
    $query = mysqli_query($db, $sql);
    $cek = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);
    // echo $data['nama'];
    // print_r($data['email']);
    // print_r($data['password']);
    // print_r($cek);
    if ($cek > 0) {
        echo "sukses";
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "Login";
        $_SESSION['nama'] = $data['nama'];
        header("location:index.php");
    }else{
        echo "GAGAL";
    }
?>