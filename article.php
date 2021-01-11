<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web</title>
    <?php include('resources.php') ?>
</head>
<body>
        <?php 
            include('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM posting where id='$id'"; 
            $query = mysqli_query($db, $sql);
            $data = mysqli_fetch_array($query);
        ?>

    <div class="container-fluid">
        <h1><?= $data['judul'] ?></h1>
        <h4><?= $data['created_at'] ?></h4>
        <hr>
        <p><?= $data['artikel'] ?></p>
    </div>
</body>
</html>