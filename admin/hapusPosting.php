<?php
    require_once('config.php');

    $data = $_GET['id'];
    
    $sql = "DELETE FROM `posting` WHERE `posting`.`id` = $data";
    $query = mysqli_query($db, $sql);
    header('location:dataPosting.php');
    exit();
?>