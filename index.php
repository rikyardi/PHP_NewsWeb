<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web</title>
    <?php include('resources.php') ?>
</head>
<body>


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
                        <div class="panel-footer">
                            <a href="article.php?id=<?= $data['id']  ?>">
                            <button class="btn btn-success">Lihat</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
            <div class="col-md-4 bg-dark" >
            d
            </div>

    </div>
</body>
</html>