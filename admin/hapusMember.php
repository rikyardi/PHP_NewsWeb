<?php
    require_once('config.php');

    $data = $_GET['id'];
    
    $sql = "DELETE FROM `membership` WHERE `membership`.`id` = $data";
    $query = mysqli_query($db, $sql);
    header('location:membership.php');
    exit();
?>