<?php
    include('config.php');

    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $data = $_POST['data'];
    $time = date("l").', '.date("d/m/Y");

    $sql = "INSERT INTO `posting` VALUES ('', '$judul', '$kategori', '$data', '$time')"; 
    $query = mysqli_query($db, $sql);
    header('location:index.php');
?>