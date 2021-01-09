<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web</title>
    <?php include('resources.php') ?>
</head>
<body bgcolor="green">
    <div class="container-fluid">
        <?php
            include('config.php');
            $sql = "SELECT * FROM posting";
            $query = mysqli_query($db, $sql);
            while($data = mysqli_fetch_array($query)){
        ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading"><?= $data['judul'] ?></div>
                        <div class="panel-body"><?= $data['deskripsi'] ?></div>
                        <div class="panel-footer"><button class="btn btn-success">Lihat</button></div>
                    </div>
                </div>
        <?php } ?>
            </div>
            <div class="col-md-4 bg-dark" >
            d
            </div>

    </div>
</body>
</html>