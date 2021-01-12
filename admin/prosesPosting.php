<?php
    require_once('config.php');
    

    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $data = $_POST['data'];
    $time = date("l").', '.date("d/m/Y");

    $sql = "INSERT INTO `posting` VALUES ('', '$judul', '$kategori', '$deskripsi', '$data', '$time')"; 
    $query = mysqli_query($db, $sql);
    header('location:posting.php');
    exit();
?>