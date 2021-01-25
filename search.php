<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <?php 
    session_start();
    include('resources.php') ?>
</head>
<body>
    <?php include('navbar.php') ?>
    
    <div style="padding:20px 0px 20px 20px">
    <h2>Hasil <strong>Pencarian </strong></h2>
    <hr style="border-top: 5px solid blue; width:30%; text-align:left; margin-left:0px">
    </div>
    <div class="container-fluid">
        <?php
            include('config.php');
            $judul = $_POST['input'];
            $sql = "SELECT * FROM posting WHERE judul LIKE '%$judul%' ";
            $query = mysqli_query($db, $sql);
        ?>
            <div class="row">
                <div class="col-md-12">
                    <div style="background-color: whitesmoke;padding:20px;margin: -10px 0px 20px 0px; border-radius:10px">
                <?php while($data = mysqli_fetch_array($query)){ ?>
                    <div class="panel panel-default">
                        <a href="article.php?id=<?= $data['id']  ?>">
                            <div class="panel-body" style="display:flex">
                                <div style="display: flex;width:35%">
                                    <img src="asset/img/uploads/<?= $data['img']?>" style="width: 300px;height:200px">
                                </div>
                                <div style="width:65%">
                                    <h3><?= $data['judul'] ?></h3>
                                    <h5><i class="fa fa-edit fa-fw"></i> <?= $data['created_at'] ?></h5>     
                                    </div>
                            </div>                    
                        </a>
                    </div>
    
                <?php } ?>
                </div>
            </div>
            </div>
    <?php include('footer.php')?>
</body>
</html>