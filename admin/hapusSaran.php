<?php
    require_once('config.php');

    $data = $_GET['id'];
    
    $sql = "DELETE FROM `saran` WHERE `saran`.`id` = $data";
    $query = mysqli_query($db, $sql);
    header('location:saran.php');
    exit();
?>