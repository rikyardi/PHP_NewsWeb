<?php require_once('auth.php')?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Halaman Data Admin</title>
        <?php include('resources.php')?>

        <style>
        p > img{
            max-width: 100%;
            height: auto !important;
        }
        </style>
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include('navigasi.php') ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Posting</h1>
                        </div>
                    </div>

                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col">Action</th>                                 
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    require_once('config.php');
    
                                    $sql = "SELECT * FROM posting";
                                    $query = mysqli_query($db, $sql);
                                    while($data = mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $data['id']?></th>
                                        <td>
                                            <div style="width: 100px;">    
                                                <?= $data['judul']?></td>
                                            </div>
                                        <td><?= $data['kategori']?></td>
                                        <td><?= $data['created_at'];?></td>
                                        <td>
                                            <button data-toggle="modal" data-target="#myModal<?= $data['id']?>" class="btn btn-success"  data-target="ModalAddData"><i class="fa fa-eye fa-fw"></i> Lihat</button>
                                            <a href="hapusPosting.php?id=<?= $data['id']?>">
                                                <button class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i> Hapus</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /#wrapper -->
        <?php 
            require_once('config.php');
            $sql = "SELECT * FROM posting";
            $query = mysqli_query($db, $sql);
            while($data = mysqli_fetch_array($query)){
            ?>
            <!-- Modal -->
            <div class="modal fade" id="myModal<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="margin-left:-180px; width:1000px">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title" id="myModalLabel">Artikel</h3>
                        </div>
                        <div class="modal-body">
                            <h2><?= $data['judul'] ?></h2><br>
                            <hr style="border-top: 2px dashed">
                            <p><?= $data['artikel'] ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ================================================ -->
            <?php } ?>
        
    </body>
</html>
