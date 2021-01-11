<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Halaman Data Membership Baksos</title>
        <?php include('resources.php')?>
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include('navigasi.php') ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Membership</h1>
                        </div>
                    </div>

                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                        <!-- <button data-toggle="modal" data-target="#myModal" class="btn btn-success" style="margin-bottom: 10px; float:right" data-toggle="addData" data-target="ModalAddData"><i class="fa fa-edit fa-fw"></i>Create New</button> -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No. Telp</th>
                                        <th scope="col">TTL</th>
                                        <th scope="col">Asal Kota</th>
                                        <th scope="col">Email</th>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    include("config.php");

                                    $sql = "SELECT * FROM membership";
                                    $query = mysqli_query($db, $sql);

                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                    <tr>
                                        <th scope="row"><?= $data['id']?></th>
                                        <td><?= $data['nama']?></td>
                                        <td><?= $data['alamat']?></td>
                                        <td><?= $data['notlp']?></td>
                                        <td><?= $data['ttl']?></td>
                                        <td><?= $data['asal kota']?></td>
                                        <td><?= $data['email']?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>